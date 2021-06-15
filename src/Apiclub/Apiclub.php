<?php
/**
 * PHP Wrapper for Flipkart API (unofficial)
 * GitHub: https://github.com/xaneem/flipkart-api-php
 * Demo: http://www.clusterdev.com/flipkart-api-demo
 * License: MIT License
 *
 * @author Saneem (@xaneem, xaneem@gmail.com)
 * @version 0.5
 */

namespace Apiclub;

class Apiclub
{
	//Affiliate ID and token are entered through the constructor
    private $apiKey;
    private $referer = "test";

    private $base_url = 'https://api.apiclub.in/api/v1/';
    private $verify_ssl   = false;

    /**
     * Obtains the values for required variables during initialization
     * @param string $apiKey Your API Key.
     * @param string $token Access token for the API.
     * @param string $response_type Can be json/xml.
     * @return void
     **/
    function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Calls the API directory page and returns the response.
     *
     * @return string Response from the API
     **/
    public function api_home(){
        return $this->sendRequest($this->base_url);
    }

    /**
     * Used to call URLs that are taken from the API directory.
     * Any change in the URL makes it invalid and the API refuses to respond.
     * The URLs have a timeout of ~4 hours, after which a new URL is to be 
     * taken from the API homepage.
     *
     * @return string Response from the API
     **/
    public function call_url($url){
        return $this->sendRequest($url);
    }

    /**
     * Sends the HTTP request using cURL.
     * 
     * @param string $url The URL for the API
	 * @param int $timeout Timeout before the request is cancelled.
     * @return string Response from the API
     **/
     
    public function vehicle_info($data){
        return $this->sendRequest($this->base_url.__FUNCTION__, $data);
    }
     
    private function sendRequest($url, $data){
    	//Make sure cURL is available
    	if (function_exists('curl_init') && function_exists('curl_setopt')){
	        $headers = array(
	            'Referer: '.$this->referer,
	            'API-KEY: '.$this->apiKey,
	            'Content-Type: application/x-www-form-urlencoded'
	            );

	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	        curl_setopt($ch, CURLOPT_POST, true);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->verify_ssl);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	        $result = curl_exec($ch);
	        curl_close($ch);

	        return $result ? $result : false;
	    } else {
			return false;
	    }        
    }
}