<?php


interface Notification{
    public function send ($message);

    public function getStatus();

    public function getType();

}