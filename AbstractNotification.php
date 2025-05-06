<?php

abstract class AbstractNotification implements Notification{

    public $status;
    public $timestamp;

    public function getStatus(){
        return $this->status;
    }

    abstract function send($message);

    abstract function getType();
}