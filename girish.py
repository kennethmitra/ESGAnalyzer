import pandas as pd
from pandas import ExcelFile

excel_path = "company.xlsx"
industry_path = 'industry.xlsx'
data = pd.read_excel(excel_path)
data2 = pd.read_excel(industry_path)
short_data = data.loc[:, 'TICKER' : 'WORKER']
short_data.to_csv('data.csv', index = False)
short_data2 = data2.loc[:, 'NAME' : 'WORKER']
short_data2.to_csv('industrydata.csv', index = False)