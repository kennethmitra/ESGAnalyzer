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


now = datetime.now()
one = now - relativedelta(years=1)
three = now - relativedelta(years=3)
five = now - relativedelta(years=5)
l = [one, three, five]
ten = now - relativedelta(years=10)
arr = [df_now.iloc[0][1]]

for i in l:
    f = get_historical_data(companyName, i - relativedelta(days = 5), i, token = IEXTOKEN, output_format='pandas', close_only = True)
    f = f.tail(1)
    arr.append(f.iloc[0]['close'])

s = ['oneYearGrowth', 'threeYearGrowth', 'fiveYearGrowth']
for i in range(1, 4):
    ret = calc_percent(arr[0], arr[i])
    df_now[s[i - 1]] = ret

print(df_now.iloc[0][0], df_now.iloc[0][1], df_now.iloc[0][2], df_now.iloc[0][3], df_now.iloc[0][4], df_now.iloc[0][5], df_now.iloc[0][6], df_now.iloc[0][7], sep=',')

