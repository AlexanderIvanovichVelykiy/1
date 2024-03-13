<?php
$subject = 'Hello there';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Alexander';
$text1 = "firstName : {$firstName}" . "\n";
$text2 = "test letter" . "\n";
$text3 = "some info" . "\n";
$text3 = "some text" . "\n";
$text4 = "long message" . "\n";
$text5 = "some info" . "\n";
$message = $text1 .$text2 .$text3 . $text4 .$text5;
echo $message;
$headers = 'From: velikiyalex2002@gmail.com';
$i = 0;
mail('alahbar555@gmail.com', $subject, $message, $headers);


