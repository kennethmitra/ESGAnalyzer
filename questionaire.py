import pandas as pd




def get_altered_df (questionaire):
    size = 0
   
    df = pd.read_csv('data.csv')
    # print(df)
    for i in questionaire:
        df.iloc[:, size + 6] *= i
        size = size + 1
    
    df['WEIGHTED_SCORE'] = df[['COMM', 'CUST', 'ENV', 'JOBS', 'LEAD', 'PROD', 'WORKER']].mean(axis=1)
    df = df.sort_values(by = ['WEIGHTED_SCORE'], ascending = False)
    df = df[['NAME', 'TICKER']].head(10)
    
    for index, row in df.iterrows():
        print(row['NAME'], row['TICKER'], sep = ',', end = ',')



