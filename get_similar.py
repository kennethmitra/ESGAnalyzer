import pandas as pd
import sys

df = pd.read_csv("data.csv")
df2 = pd.read_csv('industrydata.csv')

companyName = 'AAPL'

matchingCompanies = df.loc[(df['NAME'] == companyName) | (df['TICKER'] == companyName)]
industry = matchingCompanies.iloc[0]['JUST_IND']
matchingIndustry = df.loc[(df['JUST_IND'] == industry)]
matchingIndustry = matchingIndustry.drop(matchingIndustry[(matchingIndustry['NAME'] == companyName) | (matchingIndustry['TICKER'] == companyName)].index)
matchingIndustry = matchingIndustry[['NAME', 'TICKER', 'WEIGHTED_SCORE']].head(3)

for index, row in matchingIndustry.iterrows():
    print(row['NAME'], row['TICKER'], row['WEIGHTED_SCORE'], sep = ',', end = ',')

