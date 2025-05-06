<?php

class EmailNotification extends AbstractNotification{

    public string $send;

    public bool $change = false;

    public function send(string $message):string{
        $this->change = true;
        return $this->send = "Сообщение было отправлено с таким содержимым:" . $message;
    }

    public function getStatus():string{
        //return $this->status = "Сообщение было отправлено на Email";
        if ($this->change == false){
            return $this->status = "Сообщение не было отправлено на Email";
        }else{
            return $this->status = "Сообщение было отправлено на Email";
        }
    }

    public function getType(): string{
        return "Email";
    }
}