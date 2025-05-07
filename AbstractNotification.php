<?php

abstract class AbstractNotification implements Notification{

    public bool $status = false;

    public function getStatus(): string{
        return $this->status;
    }

    abstract function send(string $message):string;

    abstract function getType():string;
}