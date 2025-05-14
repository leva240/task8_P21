<?php

class EmailNotification extends AbstractNotification{

    public string $send;

    public function send(string $message):string{
        $this->status = "Сообщение было отправлено на Email";
        return $this->send = "Сообщение было отправлено с таким содержимым:" . $message;
    }

    public function getStatus():string{
        return $this->status;
    }

    public function getType(): string{
        return "Email";
    }
}