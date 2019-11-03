from tokens import *
from iexfinance.stocks import Stock
from iexfinance.refdata import get_symbols
import pandas as pd

data = pd.read_csv('data.csv')
f_s = Stock('MSFT', token = IEXTOKEN, output_format='pandas')
df = f_s.get_quote().transpose()
error = pd.DataFrame(columns = ['Index','Company'])
i = 0
for index, row in data.iterrows():
    try:
        if i == 0:
            i = i + 1
            continue
        
        s = Stock(row['TICKER'], token = IEXTOKEN, output_format='pandas')
        temp_df = s.get_quote().transpose()
        df = df.append(temp_df, ignore_index = True)
        print(i)
        i = i + 1

    except: 
        error = error.append({'Index' :i,'Company': row['NAME']}, ignore_index = True)
        print(i)
        i = i + 1

df.to_csv('stockdata.csv')


