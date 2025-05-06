<?php

require_once 'Notification.php';
require_once 'AbstractNotification.php';
require_once 'EmailNotification.php';
require_once 'SMSNotification.php';


$emailNotification = new EmailNotification();
$smsNotification = new SMSNotification();



$emailMessage = $emailNotification->send('Это сообщение было отправлено на Email');
$smsMessage = $smsNotification->send('Это сообщение было отправлено на SMS');



echo "Email уведомление: " . $emailMessage . "\n";
echo "SMS уведомление: " . $smsMessage . "\n";



echo "Email статус: " . $emailNotification->getStatus() . "\n";
echo "Email тип: " . $emailNotification->getType() . "\n";

echo "SMS статус: " . $smsNotification->getStatus() . "\n";
echo "SMS тип: " . $smsNotification->getType() . "\n";