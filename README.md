APICLUB PHP SDK
========================


## Installation

The recommended way to install this library is through
[Composer](http://getcomposer.org).

```bash
composer require apiclub/apiclub-php-sdk
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
 
 $generate_upi = $api->generate_qr('APIclub','apiclub@upi','',true,true,'','round','');
 //Example :- $generate_upi = $api->generate_qr($name,$vpa,$amount,$show_name,$show_upi,$logo_url,$logo_type,$description);
 
 $verify_aadhar = $api->verify_aadhar($mobile_number,$passcode,$zip_file_url); //for aadhar verification
 
 $verify_pan = $api->verify_pan($pan_no); //for pan verification
 
 $vehicle_data = $api->vehicle_info('MH01XXXXXX');  //for vehicle info
 
 $fetch_dl = $api->fetch_dl('MH01XXXXXX','01-01-2000');  //for driving license
 
 $challan_data = $api->challan_info('MH01XXXXXX');  //for vehicle challan info
 
 $blacklist_data = $api->blacklist_info('MH01XXXXXX');  //for vehicle blacklist info
 
 $rto_data = $api->rto_info('MH01');  //for rto info
 
 $get_ip = $api->get_ip();  //Get IP Address
                      or
 $ip = json_decode(file_get_contents("https://api.apiclub.in/api/v1/getip"),true)['response'];
 echo $ip;
 
 $ip_track = $api->ip_track('123.122.122.11');  //for IP GEO Lookup API
 
 $check_proxy = $api->check_proxy('123.122.122.11');  //for Check Proxy/VPN API
 
 $pnr_status = $api->pnr_status('1234567890');  //for PNR Status info
 
 $search_train = $api->search_train('02802');  //for Train Search API

 $live_train = $api->live_train('02802','23-10-2021');  //for Live Train Status API
 
 $bank_info = $api->bank_info('ICICI000001');  //for IFSC Code Lookup info
 
 $upi_info = $api->vpa_info('apiclub@axis');  //for UPI Info API
 
 $pincode_info = $api->pincode_info('110001');  //for Pincode Info API
 
 $gstin_info = $api->gstin_info('22AAAAA0XXXXXX');  //for GST Number Verification API
 
 $fuel_info = $api->fuel_info('MUMBAI');  //for Fuel Price API
 
 $fast_tag_info = $api->fast_tag_info('MH01XXXXXX');  //for Fastag Info API
 
 $stocks = $api->stocks('TATASTEEL');  //for Stock Information API
 
 $currency = $api->currency('INR','USD');  //for INR to USD conversion
 
 $operator = $api->operator('7777777777');  //for Mobile Operator Info API
 
 $check_dns = $api->check_dns('github.com');  //for DNS Lookup API
 ```

## List of all APIs offered by APIclub

| Version | Name| Description|
|:--------------:|:------------------:|---------------------|
| v2 | Bank Transfer API | Disburse funds to your customer's bank account using Account Number and IFSC Code. |
| v2 | UPI Payouts API | Disburse funds to your customer's UPI / VPA Address using UPI ID. |
| v2 | Payout Status API | Check Bank Account / UPI / Paytm disbursal status quickly. |
| v2 | Bank Account Validation | Validate the Bank Account details of your customer with small amount transfer. |
| v2 | UPI Address Validation | Validate the UPI Address of your customer with small amount transfer. |
| v2 | UPI Payment Gateway | Accept Payments hassle free through UPI Payment Gateway on your website. |
| v2 | UPI Collect | Send Collect request to your Customer's VPA Address. |
| v2 | UPI QR | Create dynamic UPI QR Code for accepting payments and realtime payment notification. |
| v2 | Dynamic UPI | Create dynamic UPI ID for accpeting payments from your customers. |
| v1 | PAN Verification  | Verify PAN Card Holder details from Pan Number. |
| v1 | e-KYC Offline Aadhar  | Offline Aadhar e-KYC API helps to do Paperless Aadhar Offline e-KYC with the zip file downloaded from UIDAI's Website. |
| v1 | Generate UPI QR  | Generate UPI QR API helps you to generate professional UPI QR Stickers. |
| v1 | Vehicle Information | Vehicle Verification API can be used to fetch information of any Indian Vehicle using its Registration Number / License plate. |
| v1 | Driving License | Driving License Info API can be used to fetch any Indian driving license information using its License Number. |
| v1 | Challan Information | Challan Info API can be used to fetch challan information of any Indian Vehicle using its Registration Number / License plate. |
| v1 | Vehicle Blacklist | Vehicle Blacklist API can be used to check the blaclist status of any Indian Vehicle using its Registration Number / License plate. |
| v1 | RTO Information | Get Information of any Indian RTO. |
| v1 | Get IP Address | Get incoming visitor's IP address instantly. |
| v1 | IP Lookup API | Prevent Fraud on your application with IP Lookup API with all the advanced details of an IP Address. |
| v1 | Check Proxy API | Detect if your website visitor is using Proxy / VPN and prevent fraudulent activities. |
| v1 | Train PNR Status | Train PNR Status API provides information about the PNR status of the booked ticket of Indian Railways. |
| v1 | IFSC Code Lookup | Bank Info API can be used to fetch any bank's information using IFSC Code. |
| v1 | GSTIN Verification API | GSTN Info API provides basic information of GSTN. |
| v1 | UPI Info  | Get basic information of the UPI with its registered PSP. |
| v1 | Pincode Info  | Get information related to Postal / Pincode Code which includes its City, State, Division, Area, Post Office Name etc. |
| v1 | Fuel Price API | Fuel Info API provides information of latest fuel price of various cities and states of India. This API includes diesel and petrol prices. 
| v1 | Fastag Information | Fastag Info API can be used to fetch Fastag information of any Indian Vehicle using its Registration Number / License plate. |
| v1 | Stock Information API | Stock Price API can be used to fetch any NSE/BSE real time Stocks Price data with the company name. |
| v1 | Currency Exchange API | Currency Exchange API lets you convert your currency to any currency easily. |
| v1 | Invoice Generator | Generate Invoice for your client calling simple API for free. |
| v1 | Mobile Operator | Mobile Operator Exchange API lets you find any Indian Mobile Number Operator details quickly. |
| v1 | DNS Lookup API | DNS Checker API helps you to fetch any Hostname DNS records easily. |


## Help and Docs

For Support Please refer to :

- [Discord](https://discord.gg/hkNKaJZdzb)
- [Telegram](https://t.me/joinchat/WTnBUHaiRRARjHsC)
- [Youtube](https://www.youtube.com/channel/UCaUC5DsT0wq33QFH8mQuVHQ)
- [Email](mailto:info@apiclub.in)
- [Help Center](https://help.apiclub.in)
