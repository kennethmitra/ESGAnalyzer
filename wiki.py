import wikipedia as wiki
import pandas as pd

df = pd.read_csv('data.csv')
df2 = pd.DataFrame(['NAME', 'ABOUT'])
error = pd.DataFrame(['ERROR'])
i = 0
for index, row in df.iterrows():
    try:
        df3 = pd.DataFrame([row['NAME'], wiki.summary(row['NAME'])])
    except: 
        error = error.append([row['NAME']])
    print(i)
    i = i + 1
    df2 = df2.append(df3, ignore_index = True)
    
df2.to_csv("about.csv")
error.to_csv("cant.csv")