<?php
/**
 * PHP SDK for APIclub API
 * GitHub: https://github.com/Apiclub/api-php-sdk
 * License: MIT License
 *
 * @author APIclub (info@apiclub.in)
 * @version 1.0.0
 */

namespace Apiclub;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\ResponseInterface;
use Apiclub\Exceptions\SocketException;
use function GuzzleHttp\Psr7\str;

class Api
{
    private $apiKey;
    private $referer;

    private $base_url = 'https://api.apiclub.in/api/v1/';
    private $verify_ssl = false;
    private $guzzle;

    /**
     * Obtains the values for required variables during initialization
     * @param string $apiKey Your API Key.
     * @return void
     **/
    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->referer = $_SERVER['HTTP_HOST'];
        $this->guzzle = new Client($options = []);
    }
    
    protected function getheaders() {
        $headers = [
            'Referer' => $this->referer,
            'API-KEY' => $this->apiKey
        ];
        return $headers;
    }

    public function base_url() {
        return $this->base_url;
    }
    
    public function vpa_info($vpa) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vpa' => $vpa
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function pincode_info($pincode) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'pincode' => $pincode
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function pnr_status($pnr_no) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'pnr_no' => $pnr_no
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function generate_qr($name,$vpa,$amount="",$show_name=true,$show_upi=true,$logo_url="",$logo_type="round",$description="") {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'name' => $name,
                'vpa' => $vpa,
                'amount' => $amount,
                'show_name' => $show_name,
                'show_upi' => $show_upi,
                'logo_url' => $logo_url,
                'logo_type' => $logo_type,
                'description' => $description
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function verify_aadhar($mobile_number,$passcode,$zip_url) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'zip_url' => $zip_url,
                'passcode' => $passcode,
                'mobile' => $mobile_number
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function verify_pan($pan_no) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'pan_no' => $pan_no
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function mybal() {
        $options = [
            'headers' => $this->getheaders(),
        ];
        return $this->send($this->base_url.__FUNCTION__,'GET', $options, true);
    }
    
    public function getip() {
        $options = [
            'headers' => $this->getheaders(),
        ];
        return $this->send($this->base_url.__FUNCTION__,'GET', $options, true);
    }
     
    public function vehicle_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vehicleId' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function fetch_dl($key,$id) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'dl_no' => $key,
                'dob' => $id
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function challan_info($key,$chassis) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vehicleId' => $key,
                'chassis' => $chassis
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function blacklist_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vehicleId' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function rto_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'rto_code' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function ip_track($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'ip_address' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function check_proxy($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'ip_address' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function pnr_status($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'pnr_no' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function bank_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'ifsc' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function gstin_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'gstn' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function fuel_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'citystate' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function fast_tag_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vehicleId' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function stocks($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'company' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function currency($base,$quote) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'base' => $base,
                'quote' => $quote
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function generate_invoice($data) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => $data
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function operator($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'mobile' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function check_dns($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'domain' => $key,
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    protected function send(string $uri, string $method = 'GET', $options, bool $returnResponseBodyOnly = true)
    {
        if (is_null($this->base_url)) {
            throw new Exception("Invalid null endpoint");
        }

        try {
            $response = $this->guzzle->request($method, $uri, $options);
            $this->resetRequest();
            return ($returnResponseBodyOnly) ? $this->getResponseBody($response) : $response;
        } catch (ClientException $e) {
            throw new Exception($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode());
        } catch (BadResponseException $e) {
            throw new Exception($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode());
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
    
    public function resetRequest(): void
    {
        $this->base_url = null;
    }
    
    public function getResponseBody(Response $response)
    {
        if (!empty($response->getHeader('Content-Type')) && stristr($response->getHeader('Content-Type')[0],
                'application/json')
        ) {
            return json_decode(
                $response->getBody()
            );
        } else {

            return $response->getBody()->__toString();
        }
    }
}
