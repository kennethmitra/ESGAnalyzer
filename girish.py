import pandas as pd
from pandas import ExcelFile

excel_path = "company.xlsx"

data = pd.read_excel(excel_path)
print(data)