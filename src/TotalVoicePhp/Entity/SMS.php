<?php

namespace TotalVoicePhp\Entity;

use TotalVoicePhp\Entity;
use \Exception;

class SMS
{

    private $number_destiny;
    private $message;
    private $user_can_answer;
    private $multi_sms;
    /**
     * Construct
     */
    public function __construct($config){

        $this->setNumberDestiny($config['number_destiny']);         
        $this->setMessage($config['message']);
        $this->setUserCanAnswer(!empty($config['user_can_answer']) ? $config['user_can_answer'] : 'false');
        $this->setMultiSMS(!empty($config['multi_sms']) ? $config['multi_sms'] : 'false');
    }

    /**
     * Set number_destiny
     */
    public function setNumberDestiny($number_destiny){
        $this->number_destiny = $number_destiny;
    }


    /**
     * Set message
     */
    public function setMessage($message){
        $this->message = $message;
    }

    /**
     * Get number_destiny
     */
    public function getNumberDestiny(){
        return $this->number_destiny;
    }
  
    /**
     * Get message
     */
    public function getMessage(){
        return $this->message;
    }
    
    /**
     * Set number_destiny
     */
    public function setUserCanAnswer($user_can_answer){
        $this->user_can_answer = $user_can_answer;
    }
  
  
    /**
     * Set multi_sms
     */
    public function setMultiSMS($multi_sms){
        $this->multi_sms = $multi_sms;
    }


    /**
     * Get user_can_answer
     */
    public function getUserCanAnswer(){
        return $this->user_can_answer;
    }
    
    /**
     * Get multi_sms
     */
    public function getMultiSMS(){
        return $this->multi_sms;
    }

    /**
     * Get multi_sms
     */
    public function getSMSConfiguration(){

        $data = array(
            'numero_destino'    => $this->getNumberDestiny(), 
            'mensagem'          => $this->getMessage(),
            'resposta_usuario'  => $this->getUserCanAnswer(),
            'multi_sms'         => $this->getMultiSMS()
        );

        return $data;
    }


}