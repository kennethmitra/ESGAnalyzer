import pandas as pd

companyName = 'AAPL'

def calc_percent(a, b):
    return (a - b)/a * 100

df_now = pd.read_csv('stockdata.csv')
df_now = df_now.loc[(df_now['symbol'] == companyName), ['symbol','latestPrice', 'change','volume', 'marketCap']]


print(df_now.iloc[0][0], df_now.iloc[0][1], df_now.iloc[0][2], df_now.iloc[0][3], df_now.iloc[0][4], sep=',')

