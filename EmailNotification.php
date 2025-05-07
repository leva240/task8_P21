<?php

class EmailNotification extends AbstractNotification{

    public string $send;

    public function send(string $message):string{
        $this->status = true;
        return $this->send = "Сообщение было отправлено с таким содержимым:" . $message;
    }

    public function getStatus():string{
        if ($this->status == false){
            return "Сообщение не было отправлено на Email";
        }else{
            return "Сообщение было отправлено на Email";
        }
    }

    public function getType(): string{
        return "Email";
    }
}