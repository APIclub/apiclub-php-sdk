<?php
/**
 * PHP SDK for Apiclub API
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

class Apiclub
{
    private $apiKey;
    private $referer;

    private $base_url = 'https://api.apiclub.in/api/v1/';
    private $verify_ssl   = false;
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
    
    public function dl_info($key) {
        $data = 'dl_no='.$key;
        return $this->sendRequest($this->base_url.__FUNCTION__, $data, true);
    }
    
    public function challan_info($key) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'vehicleId' => $key,
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
    
    public function daily_quotes($key = 'en') {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'lang' => $key,
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
    
    public function love_calculator($fname,$sname) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'fname' => $fname,
                'sname' => $sname
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
    
    public function send_sms($to,$msg) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'to' => $to,
                'msg' => $msg
            ]
        ];
        return $this->send($this->base_url.__FUNCTION__,'POST', $options, true);
    }
    
    public function sms_status($id) {
        $options = [
            'headers' => $this->getheaders(),
            'form_params' => [
                'msg_id' => $id
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
