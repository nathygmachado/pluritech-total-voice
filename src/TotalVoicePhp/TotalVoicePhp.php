<?php

namespace TotalVoicePhp;

use TotalVoicePhp\Notification\TotalVoice as TotalVoice;
use TotalVoicePhp\Notification\TotalVoiceSMS as TotalVoiceSMS;

use \Exception;

class TotalVoicePhp 
{
    
    private $myclass = null;
    /**
     * Get service
     */
    public function init(){
    }

    public function __construct($className, $config){
        $myclass = null;

        switch ($className){
            case 'TotalVoiceSMS':
                $this->myclass =  new TotalVoiceSMS($config);
                break;
            default:
                $this->myclass = new TotalVoice($config);
                break;
        }
    
    }

    public function getMyClass(){

        return $this->myclass;
    }
    

}

