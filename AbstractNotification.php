<?php

abstract class AbstractNotification implements Notification{

    public string $status;

    public function getStatus(): string{
        return $this->status;
    }

    abstract function send(string $message):string;

    abstract function getType():string;
}