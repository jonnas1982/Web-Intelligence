from robot.master import check_robot
from compare.master import check_dub, hasher
from get_content.master import get_status, check_status, check_seed, get_html, get_url_from_website
import requests
import re
from bs4 import BeautifulSoup
import urllib2
from urlparse import urlparse
import settings

settings.init()

print("start")
for s in settings.seed:
    get_url_from_website(s)

#index = settings.index
#settings.index = {}
#for x in index:
#    get_url_from_website(x)


#for x in settings.index:
#    print(x)

#print("Cheeking seed")
#check_seed('seed.txt')

#print(settings.ignore)
#for i in settings.ignore:
#    print(i)

print(settings.index)
print("end")
#print(urlparse('https://aau.dk').netloc)
