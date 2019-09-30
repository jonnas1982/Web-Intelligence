from requests import get
import re
from bs4 import BeautifulSoup
import urllib2
from time import sleep
from urlparse import urlparse
import settings
from robot.master import check_robot
from compare.master import check_dub

def get_status(url):
    try:
        status = get(url).status_code
        return status
    except Exception as ex:
        return type(ex).__name__

def check_status(url):
    if settings.last_domain in url:
        sleep(1)
    status = get_status(url)
    if status == 'ConnectionError':
            if 'https://' in url:
                url = url.replace('https://', 'https://www.')
                status = get_status(url)
                return status, url
            else:
                url = url.replace('http://', 'http://www.')
                status = get_status(url)
                return status, url
    else:
        return status, url

def check_seed(file, new_seed = []):
    k = 0
    seed_file = open(file, 'r')
    seed = seed_file.read().split('\n')
    seed = list(dict.fromkeys(seed))
    seed_file.close()
    for url in seed:
        print("K: " + str(k))
        print(url)
        if k == 1000:
            break
        else:
            status, u = check_status(url)
            if status == 200 and check_top_domain(url):
                new_seed.append(u)
                k += 1
    seed_file = open('seed.txt', 'w')
    k = 0
    for i in new_seed:
        print("K: " + str(k))
        if k == 1000:
            break
        else:
            seed_file.write(i + '\n')
            k += 1
    seed_file.close()
    seed_file = open('seed.txt', 'r')
    seed = seed_file.read().split('\n')
    seed_file.close()

def get_html(url):
    if settings.last_domain in url:
        print("wait2")
        sleep(1)
    html_page = urllib2.urlopen(url)
    soup = BeautifulSoup(html_page, 'html.parser')
    settings.last_domain = urlparse(url).netloc
    return soup.prettify()

def get_url_from_website(url):
    try:
        print(url, settings.last_domain)
        print(1)
        netloc = urlparse(url).netloc.replace('www.', '')
        print(2)
        check_robot(netloc)
        if check_ignore(url):
            return
        elif settings.last_domain in url:
            print("wait1")
            sleep(1)
        else:
            settings.last_domain = netloc

        req = urllib2.Request(url, headers={"User-Agent": "Mozilla/5.0"})
        html_page = urllib2.urlopen(req)
        soup = BeautifulSoup(html_page.read().decode('utf-8', 'ignore'), 'html.parser')
        if not check_near_duplicate(soup.get_text()):
            getText(soup)
            return
        for link in soup.findAll('a', attrs={'href': re.compile("^http://")}):
            link_get = str(link.get('href').encode('utf8'))
            if link_get not in settings.index and not check_ignore(link_get):
                settings.index[link_get] = get_html(link_get)
        for link in soup.findAll('a', attrs={'href': re.compile("^https://")}):
            link_get = str(link.get('href').encode('utf8'))
            if link_get not in settings.index and not check_ignore(link_get):
                settings.index[link_get] = get_html(link_get)
    except Exception as e:
        print("Error: " + str(url))
        print(e)
        pass

def check_ignore(url):
    for link in settings.ignore:
        if link in url:
            return True
        else:
            return False

def check_near_duplicate(text):
    for t in settings.text.values():
        if check_dub(text, t) > 90:
            return False
        else:
            pass

def getText(soup):
    text = soup.find_all(text=True)

    output = ''
    blacklist = [
	    '[document]',
	    'noscript',
	    'header',
	    'html',
	    'meta',
	    'head',
	    'input',
	    'script',
	    # there may be more elements you don't want, such as "style", etc.
    ]

    for t in text:
	    if t.parent.name not in blacklist:
		    output += '{} '.format(t)

    print(output)
