import pandas as pd
from pandas import ExcelFile

excel_path = "company.xlsx"

data = pd.read_excel(excel_path)
short_data = data.loc[:, 'TICKER' : 'WORKER']
short_data.to_csv('data.csv', index = False)