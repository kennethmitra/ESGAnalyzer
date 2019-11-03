import wikipedia as wiki
import pandas as pd

df = pd.read_csv('data.csv')
df2 = pd.DataFrame(columns = ['NAMES', 'ABOUT'])
error = pd.DataFrame(columns = ['Index','Company'])
i = 0
for index, row in df.iterrows():
    try:
        df3 = pd.DataFrame({'NAMES' : [row['NAME']], 'ABOUT': [wiki.summary(row['NAME'])]})
    except: 
        error = error.append({'Index' :i,'Company': row['NAME']}, ignore_index = True)
    print(i)
    i = i + 1
    df2 = df2.append(df3, ignore_index = True)

df2.to_csv("about.csv", index = False)
error.to_csv("cant.csv", index = False)