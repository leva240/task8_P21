<?php

class SMSNotification extends AbstractNotification{

    public $send;

    public function send($message){
        return $this->send = "Сообщение было отправлено с таким содержимым: " . $message;
    }

    public function getStatus(){
        return $this->status = "Сообщение было отправлено на SMS";
    }

    public function getType(){
        return "SMS";
    }
}