from tokens import *
from iexfinance.stocks import Stock
from iexfinance.refdata import get_symbols
import pandas as pd

df = get_symbols(output_format='pandas', token=IEXTOKEN)
a = Stock('AAPL', token = IEXTOKEN, output_format='pandas')
print(a.get_quote().transpose())