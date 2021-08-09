<?php

require_once __DIR__ . '/vendor/autoload.php';
use Apiclub\Api;


$api = new Api("<your api key>");

$generate_upi = $api->generate_qr('APIclub','apiclub@upi','',true,true,'','round','');
//Example :- $generate_upi = $api->generate_qr($name,$vpa,$amount,$show_name,$show_upi,$logo_url,$logo_type,$description);
 
$verify_aadhar = $api->verify_aadhar($mobile_number,$passcode,$aadhar_no,$zip_file_url); //If you want to verify mobile number too with Aadhar
 
$verify_aadhar = $api->verify_aadhar($mobile_number="",$passcode,$aadhar_no="",$zip_file_url); //If you do not want to verify mobile number with Aadhar

$vehicle_data = $api->vehicle_info('MH01XXXXXX');  //for vehicle info

$dl_data = $api->dl_info('MH01XXXXXX');  //for driving license info

$fetch_dl = $api->fetch_dl('MH01XXXXXX','01-01-2000');  //for driving license alternative API

$challan_data = $api->challan_info('MH01XXXXXX');  //for vehicle challan info

$blacklist_data = $api->blacklist_info('MH01XXXXXX');  //for vehicle blacklist info

$rto_data = $api->rto_info('MH01');  //for rto info

$daily_quotes = $api->daily_quotes('en');  //for Daily Quotes API

$get_ip = $api->get_ip();  //Get IP Address
                     or
$ip = json_decode(file_get_contents("https://api.apiclub.in/api/v1/getip"),true)['response'];
echo $ip;

$ip_track = $api->ip_track('123.122.122.11');  //for IP GEO Lookup API

$check_proxy = $api->check_proxy('123.122.122.11');  //for Check Proxy/VPN API

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
 }');  //for Invoice Generator API

$operator = $api->operator('7777777777');  //for Mobile Operator Info API

$check_dns = $api->check_dns('github.com');  //for DNS Lookup API

$send_sms = $api->send_sms('+917777777777','This is a test message to send via API');  //Bulk SMS API

$sms_status = $api->sms_status('xxxxxxxx');  //for SMS Status API 

?>
