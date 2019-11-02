import pandas as pd

data = pd.read_html('https://en.wikipedia.org/wiki/List_of_S%26P_500_companies')

table = data[0]

tickers = table['Symbol'].tolist()
# print(tickers)

data = pd.read_html('https://finance.yahoo.com/quote/XOM/sustainability?p=XOM')
print(data)
