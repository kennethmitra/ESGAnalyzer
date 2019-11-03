import pandas as pd
import random

df = pd.read_csv("data.csv")
df2 = pd.read_csv('industrydata.csv')
companyName = sys.argv[1]

try:
    matchingCompanies = df.loc[(df['NAME'] == companyName) | (df['TICKER'] == companyName)]
    firstCompany = matchingCompanies.iloc[0]
    print(firstCompany['NAME'],firstCompany['TICKER'])
except:
    print(companyName,companyName)
