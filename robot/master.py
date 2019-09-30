import settings
import urllib2
from bs4 import BeautifulSoup
from urlparse import urlparse

def check_robot(url, user_agent_name = '', user_agent = False):
    try:
        req = urllib2.Request('https://' + url + '/robots.txt', headers={"User-Agent": "Mozilla/5.0"})
        html_page = urllib2.urlopen(req)
        soup = BeautifulSoup(html_page, 'html.parser')
        settings.robots.append(url + '/robots.txt')

        # We ignore allow restrictions
        for line in soup.get_text().splitlines():
            if 'User-agent' in line:
                if 'User-agent: *' in line or 'User-agent: ' + user_agent_name in line:
                    user_agent = True
                else:
                    user_agent = False
            if 'Disallow' in line and user_agent == True:
                settings.ignore.append('https://' + url + line.replace('Disallow:', '').replace(' ', '').replace('\t', ''))

    except Exception:
        pass


