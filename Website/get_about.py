import pandas as pd
import sys
import random

df = pd.read_csv("about.csv")  
print(sys.argv)
companyName = sys.argv[1]
try:
    matchingCompanies = df.loc[(df['NAMES'] == companyName) | (df['TICKER'] == companyName)]
    firstCompany = matchingCompanies.iloc[0]
    print(firstCompany['ABOUT'])
except:
    print("SUM TING WONG")  