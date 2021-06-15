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
 $vehicle_data = $api->vehicle_info('MH01XXXXXX');  //for vehicle info
 
 $dl_data = $api->dl_info('MH01XXXXXX');  //for driving license info
 
 $challan_data = $api->challan_info('MH01XXXXXX');  //for vehicle challan info
 
 $blacklist_data = $api->blacklist_info('MH01XXXXXX');  //for vehicle blacklist info
 
 $rto_data = $api->rto_info('MH01');  //for rto info
 
 $daily_quotes = $api->daily_quotes('en');  //for Daily Quotes API
 
 $get_ip = $api->get_ip();  //Get IP Address
                      or
 $ip = json_decode(file_get_contents("https://api.apiclub.in/api/v1/getip"),true)['response'];
 echo $ip;
 
 $ip_track = $api->ip_track('123.122.122.11');  //for IP GEO Lookup API
 
 $love_calculator = $api->love_calculator('john','rose');  //for Love Calculator
 
 $pnr_status = $api->pnr_status('1234567890');  //for PNR Status info
 
 $bank_info = $api->bank_info('ICICI000001');  //for IFSC Code Lookup info
 
 $gstin_info = $api->gstin_info('22AAAAA0XXXXXX');  //for GST Number Verification API
 
 $fuel_info = $api->fuel_info('MUMBAI');  //for Fuel Price API
 
 $fast_tag_info = $api->fast_tag_info('MH01XXXXXX');  //for Fastag Info API
 
 $stocks = $api->stocks('TATASTEEL');  //for Stock Information API
 
 $currency = $api->currency('INR','USD');  //for INR to USD conversion
 
 $generate_invoice = $api->generate_invoice('
                {
                    "id": "1", //required (alphanumeric or numeric)
                    "currency": "USD", //required
                    "lang": "en", //optional (default - en)
                    "date": 1619392531, //optional (default - current date time will be considered)
                    "due_date": 1619392531, //required (unix time)
                    "payment_status": "false",  //optional (boolean, default - false , Unpaid)
                    "payment_url": "",  //optional
                    "decimals": 2,  //optional (Integer for decimal places on amount)
                    "notes": "Lorem ipsum dolor sit amet.",  //optional additional notes
                    "items": [
                        //atleast 1 item array required
                        {
                            "title": "Item Name", //required
                            "description": "Item Description",  //optional
                            "price": 42, //required (integer)
                            "quantity": 1,  //optional (integer)
                            "tax": 5 //required (integer)
                        },
                        //optional item 2 array
                        {
                            "title": "Item Name", //required
                            "description": "Item Description",  //optional
                            "price": 42, //required (integer)
                            "quantity": 1,  //optional (integer)
                            "tax": 5 //required (integer)
                        }
                    ],
                    //customer details required
                    "customer": {
                        "name": "John Doe", //required
                        "address_line_1": "Address Line 1", //required
                        "address_line_2": "Address Line 2",  //optional
                        "address_line_3": "City",  //optional
                        "address_line_4": "Country",  //optional
                        "phone": "1234567890",  //optional
                        "email": "info@gmail.com"  //optional
                    },
                    // company details required
                    "company": {
                        "name": "Name", //required
                        "address_line_1": "Address Line 1", //required
                        "address_line_2": "Address Line 2",  //optional
                        "address_line_3": "City", //optional
                        "address_line_4": "Country", //optional
                        "phone": "1234567890", //optional
                        "email": "info@email.com", //optional
                        "logo_url": "https://apiclub.in/assets/images/logo.png", //optional logo url
                        //optional company additional information
                        "other": [
                            "Others Information",
                            {
                                "title": "Business hours",
                                "content": "9am - 6pm"
                            }
                        ]
                    }
                }
 ');  //for Invoice Generator API
 
 $operator = $api->operator('7777777777');  //for Mobile Operator Info API
 
 $check_dns = $api->check_dns('github.com');  //for DNS Lookup API
 
 $send_sms = $api->send_sms('+917777777777','This is a test message to send via API');  //Bulk SMS API
 
 $sms_status = $api->sms_status('xxxxxxxx');  //for SMS Status API 
 ```

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

## Help and Docs

For Support Please refer to :

- [Discord](https://discord.gg/hkNKaJZdzb)
- [Telegram](https://t.me/joinchat/WTnBUHaiRRARjHsC)
- [Youtube](https://www.youtube.com/channel/UCaUC5DsT0wq33QFH8mQuVHQ)
- [Email](mailto:info@apiclub.in)
- [Help Center](https://help.apiclub.in)
