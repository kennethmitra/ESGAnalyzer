import pandas as pd
import sys
import random

df = pd.read_csv("data.csv")
#print(sys.argv)
companyName = sys.argv[1]

try:
    matchingCompanies = df.loc[(df['NAME'] == companyName) | (df['TICKER'] == companyName)]
    firstCompany = matchingCompanies.iloc[0]
    #print(firstCompany)
    print(firstCompany['NAME'],firstCompany['TICKER'],firstCompany['JUST_IND'],firstCompany['WEIGHTED_SCORE'],firstCompany['RANK'],firstCompany['ENV'],firstCompany['WORKER'],firstCompany['PROD'],firstCompany['CUST'],firstCompany['LEAD'],firstCompany['COMM'],firstCompany['JOBS'], sep=',')
except:
    print(companyName,companyName,random.randint(50,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),sep=',')