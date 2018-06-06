<?php

namespace TotalVoicePhp\CURL;

use \Exception;

class CurlPost 
{
    

    /**
     * Get service
     */
    public function init(){
    
    }
    
    public function __construct(){

    }

    /**
     * CURL POST 
     */
    public static function post($url, $access_token, $data){


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json",
          sprintf('Access-Token: %s', $access_token)
        ));

        $response  = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $response = json_decode($response, true);

        switch ($http_code) {
            case 200:
                return array('http_code' => $http_code, 'response' => $response);
                break;

            default:

                return array('http_code' => $http_code, 'error' => $response);
                break;
        }
    }
}

