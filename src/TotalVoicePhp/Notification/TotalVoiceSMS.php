<?php

namespace TotalVoicePhp\Notification;

use TotalVoicePhp\Notification;
use TotalVoicePhp\Entity\SMS as SMSEntity;
use TotalVoicePhp\CURL\CurlPost as CurlPost;
use \Exception;

class TotalVoiceSMS extends TotalVoice
{

    private $url_sms;
    private $sms_entity;

    /**
     * Construct
     */

    public function __construct($config){
        parent::__construct($config);
        $this->url_sms = $this->url . '/sms';
    }

    public function setSMSEntity($sms_entity){
        $this->sms_entity = new SMSEntity($sms_entity);
    }

    public function getSMSEntity(){

        return $this->sms_entity->getSMSConfiguration();
    }
    
    public function send(){

        return CurlPost::post($this->url_sms, $this->access_token, $this->getSMSEntity());

    }
}