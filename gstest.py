# GS Quant documentation available at:
# https://developer.gs.com/docs/gsquant/guides/getting-started/

import datetime

from gs_quant.data import Dataset
from gs_quant.session import GsSession, Environment

GsSession.use(Environment.PROD, '8eb297dd6ffc4278a93840bcd3199aee', '5d0d012c86fd0434111214f261a041e7564da029a50523a2f09013777b97d9f3', ('read_product_data',))

ds = Dataset('USCANFPP_MINI')
data = ds.get_data(datetime.date(2017, 1, 15), datetime.date(2018, 1, 15), gsid=["75154", "193067", "194688", "902608", "85627"])
print(data.head()) # peek at first few rows of data