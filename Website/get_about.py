import pandas as pd
import sys
import random

df = pd.read_csv("about.csv")  
#print(sys.argv)
companyName = sys.argv[1]

try:
    matchingCompanies = df.loc[(df['NAMES'] == companyName) | (df['TICKER'] == companyName)]
    firstCompany = matchingCompanies.iloc[0]
    print(firstCompany['ABOUT'])
except:
    print("The Goldman Sachs Group, Inc., is an American multinational investment bank and financial services company headquartered in New York City. It offers services in investment management, securities, asset management, prime brokerage, and securities underwriting. The bank is one of the largest investment banking enterprises in the world,[3] and is a primary dealer in the United States Treasury security market and more generally, a prominent market maker. The group also owns Goldman Sachs Bank USA, a direct bank. Goldman Sachs was founded in 1869 and is headquartered at 200 West Street in Lower Manhattan with additional offices in other international financial centers.")