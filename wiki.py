import wikipedia as wiki
import pandas as pd

df = pd.read_csv('data.csv')
df2 = pd.DataFrame(columns = ['NAMES', 'TICKER', 'ABOUT'])
error = pd.DataFrame(columns = ['Index','Company'])
i = 0
for index, row in df.iterrows():
    try:
        df3 = pd.DataFrame({'NAMES' : [row['NAME']], 'TICKER': row['TICKER'], 'ABOUT': [wiki.summary(row['NAME'])]})
        df2 = df2.append(df3, ignore_index = True)
    except: 
        error = error.append({'Index' :i,'Company': row['NAME']}, ignore_index = True)
        df3 = pd.DataFrame({'NAMES' : [row['NAME']], 'TICKER': row['TICKER'], 'ABOUT': ''})
        df2 = df2.append(df3, ignore_index = True)

    print(i)
    i = i + 1


df2.to_csv("about.csv", index = False)
error.to_csv("cant.csv", index = False)