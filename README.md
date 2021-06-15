APICLUB PHP SDK
=======================


## Installation

The recommended way to install this library is through
[Composer](http://getcomposer.org).

```bash
composer require apiclub/php-sdk
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

[![Run in Postman](https://run.pstmn.io/button.svg)](https://docs.apiclub.in)

 ## Usage
 
Note :- You must have an verified APIclub Account and API Key. To get your api key visit www.apiclub.in

1. Vehicle Information

 ```php
 use Apiclub\Api;
 $api = new Api("<your api key>");
 $response = $api->vehicle_info('MH01XXXXXX');
 ```

### Help and Docs

For Support Please refer to :

- [Discord](https://discord.gg/hkNKaJZdzb)
- [Telegram](https://t.me/joinchat/WTnBUHaiRRARjHsC)
- [Youtube](https://www.youtube.com/channel/UCaUC5DsT0wq33QFH8mQuVHQ)
- [Email](mailto:info@apiclub.in)
- [Help Center](https://help.apiclub.in)

## List of all APIs offered by APIclub

| Version | Name| Description|
|:--------------:|:------------------:|---------------------|
| v2 | Bank Transfer API | Disburse funds to your customer's bank account using Account Number and IFSC Code. |
| v2 | UPI Payouts API | Disburse funds to your customer's UPI / VPA Address using UPI ID. |
| v2 | Paytm Wallet Payouts API | Disburse funds to your customer's Paytm Wallet using Paytm Registered Mobile Number. |
| v2 | Payout Status API | Check Bank Account / UPI / Paytm disbursal status quickly. |
| v2 | Bank Account Validation | Validate the Bank Account details of your customer with small amount transfer. |
| v2 | UPI Address Validation | Validate the UPI Address of your customer with small amount transfer. |
| v2 | Paytm Wallet Validation | Validate the Paytm Number of your customer with small amount transfer. |
| v1 | Vehicle Information | Vehicle Verification API can be used to fetch information of any Indian Vehicle using its Registration Number / License plate.|
| v1 | Driving License | Driving License Info API can be used to fetch any Indian driving license information using its License Number. |
| v1 | Challan Information | Challan Info API can be used to fetch challan information of any Indian Vehicle using its Registration Number / License plate. |
| v1 | Vehicle Blacklist | Vehicle Blacklist API can be used to check the blaclist status of any Indian Vehicle using its Registration Number / License plate. |
| v1 | RTO Information | Get Information of any Indian RTO. |
| v1 | Daily Quotes |Use Quotes API to generate random daily quotes. Quotes are of various genres. |
| v1 | Get IP Address | Get incoming visitor's IP address instantly. |
| v1 | IP Lookup API | Prevent Fraud on your application with IP Lookup API with all the advanced details of an IP Address. |
| v1 | Love Calculator | Integrate Love Calculator on your application. |
| v1 | Train PNR Status | Train PNR Status API provides information about the PNR status of the booked ticket of Indian Railways. |
| v1 | IFSC Code Lookup | Bank Info API can be used to fetch any bank's information using IFSC Code. |
| v1 | GSTIN Verification API | GSTN Info API provides basic information of GSTN. |
| v1 | Fuel Price API | Fuel Info API provides information of latest fuel price of various cities and states of India. This API includes diesel and petrol prices. |
| v1 | Fastag Information | Fastag Info API can be used to fetch Fastag information of any Indian Vehicle using its Registration Number / License plate. |
| v1 | Stock Information API | Stock Price API can be used to fetch any NSE/BSE real time Stocks Price data with the company name. |
| v1 | Currency Exchange API | Currency Exchange API lets you convert your currency to any currency easily. |
| v1 | Invoice Generator | Generate Invoice for your client calling simple API for free. |
| v1 | Mobile Operator | Mobile Operator Exchange API lets you find any Indian Mobile Number Operator details quickly. |
| v1 | DNS Lookup API | DNS Checker API helps you to fetch any Hostname DNS records easily. |
| v1 | Send SMS | Send BULK SMS without any DLT registeration
| v1 | Check SMS Status | Fetch the status of sent SMS by passing SMS ID received on response of Send SMS API. |


