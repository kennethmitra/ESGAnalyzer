import pandas as pd
import sys

companyName = sys.argv[1]

def calc_percent(a, b):
    return (a - b)/a * 100

df_now = pd.read_csv('stockdata.csv')
df_now = df_now.loc[(df_now['symbol'] == companyName), ['symbol','latestPrice', 'change','volume', 'marketCap', 'changePercent']]


print(df_now.iloc[0][0], df_now.iloc[0][1], df_now.iloc[0][2], df_now.iloc[0][3], int(round(float("{:.16f}".format(float(df_now.iloc[0][4]))))), df_now.iloc[0][5],sep=',')

