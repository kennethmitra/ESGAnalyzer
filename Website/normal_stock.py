from iexfinance.stocks import get_historical_data
from datetime import datetime
from tokens import *
from dateutil.relativedelta import relativedelta
import pandas as pd

companyName = sys.argv[1]

def calc_percent(a, b):
    return (a - b)/a * 100

df_now = pd.read_csv('stockdata.csv')
df_now = df_now.loc[(df_now['symbol'] == companyName), ['symbol','latestPrice', 'change','volume', 'marketCap']]


print(df_now.iloc[0][0], df_now.iloc[0][1], df_now.iloc[0][2], df_now.iloc[0][3], df_now.iloc[0][4], sep=',')

