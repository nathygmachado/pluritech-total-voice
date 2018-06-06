<?php

namespace TotalVoicePhp\Notification;


use \Exception;

class TotalVoice 
{
    
    protected $access_token = null;
    protected $url          = null;

    /**
     * Get service
     */
    public function init(){
    }

    public function __construct($account){

        $this->access_token = $account['token'];
        $this->url          = $account['url'];
    }

}

