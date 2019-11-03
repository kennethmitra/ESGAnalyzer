import pandas as pd

def get_altered_df (questionaire):
    size = 0
    df = pd.read_csv('data.csv')
    for i in questionaire:
        df.iloc[:,[size + 5]] *= i
        size = size + 1
    
    print(df)

# get_altered_df([1,2,3,4,5,6,7])