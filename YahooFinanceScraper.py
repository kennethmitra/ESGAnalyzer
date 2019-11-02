from bs4 import BeautifulSoup
import requests
from webbot import Browser

debug = True
quoteString = 'XOM'
webLink = 'https://finance.yahoo.com/quote/' + quoteString + '/sustainability'

browser = Browser(debug)
browser.go_to(webLink)
source = browser.get_page_source()
#source = requests.get(webLink).text

soup = BeautifulSoup(source, features="html.parser")
print(soup.prettify())
sus = soup.find_all("div", {"data-reactid":'20'})
print(sus)
