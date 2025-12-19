<?php

abstract class AbstractNotification implements Notification
{

    public string $status = "Сообщение не было отправлено на Email";

    public function getStatus(): string
    {
        return $this->status;
    }

    abstract function send(string $message):string;

    abstract function getType():string;
}