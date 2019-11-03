import pandas as pd
import sys

def get_altered_df (questionaire):
    size = 0
   
    df = pd.read_csv('data.csv')
    # print(df)
    for i in questionaire:
        df.iloc[:, size + 6] *= i
        size = size + 1
    
    df['WEIGHTED_SCORE'] = df[['COMM', 'CUST', 'ENV', 'JOBS', 'LEAD', 'PROD', 'WORKER']].mean(axis=1)
    df = df.sort(columns = ['WEIGHTED_SCORE'], ascending = False)
    df = df[['NAME', 'TICKER']].head(10)
    
    for index, row in df.iterrows():
        print(row['NAME'], row['TICKER'], sep = ',', end = '/')


inString = sys.argv[1]
inStringArr = inString.split(',')
inIntArr = list()
for s in inStringArr:
    inIntArr.append(int(s))
get_altered_df(inIntArr)

