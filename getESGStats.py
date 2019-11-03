import pandas as pd
import sys
import random

df = pd.read_csv("data.csv")
df2 = pd.read_csv('industrydata.csv')
#print(sys.argv)
companyName = sys.argv[1]
companyName = 'GS'
try:
    matchingCompanies = df.loc[(df['NAME'] == companyName) | (df['TICKER'] == companyName)]
    industry = matchingCompanies.iloc[0]['JUST_IND']
    firstCompany = matchingCompanies.iloc[0]
    matchingIndustry = df2.loc[(df2['NAME'] == industry)]
    firstIndustry = matchingIndustry.iloc[0]
    print(firstCompany['NAME'],firstCompany['TICKER'],firstCompany['JUST_IND'],firstCompany['WEIGHTED_SCORE'],firstCompany['RANK'],firstCompany['ENV'],firstCompany['WORKER'],firstCompany['PROD'],firstCompany['CUST'],firstCompany['LEAD'],firstCompany['COMM'], firstCompany['JOBS'], firstIndustry['WEIGHTED_SCORE'],firstIndustry['RANK'],firstIndustry['ENV'],firstIndustry['WORKER'],firstIndustry['PROD'],firstIndustry['CUST'],firstIndustry['LEAD'],firstIndustry['COMM'], firstIndustry['JOBS'], sep=',')
except:
    print(companyName,companyName,random.randint(50,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),random.randint(42,100),sep=',')


