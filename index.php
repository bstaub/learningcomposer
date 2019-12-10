<?php
require_once __DIR__ ."/vendor/autoload.php";

use App\Book;
new \App\TextBook();
echo "<br />";
new Book();
echo "<br />";

new \App\Models\Model();

echo "<br />";
new Lib;
echo "<br />";
new Move;
echo "<br />";
connect();

// Datum Carbon und Email Example
/*
use Carbon\Carbon;
$credentials = require __DIR__ ."/config/mail.php";
$today = Carbon::now()->toDayDateTimeString();

$mail_transport = (new Swift_SmtpTransport(
    $credentials['host'], $credentials['port'], $credentials['secured']
))->setUsername($credentials['username'])->setPassword($credentials['password']);

$mailer = new Swift_Mailer($mail_transport);

$message = (new Swift_Message('Testing SwiftMailer'))
    ->setFrom(['mabrweb@gmail.com' => "Mabrweb"])
    ->setTo(['bruno.staub@gmail.com'])
    ->setBody('I am using swiftmailer in my project, so simple with composer '.
        $today, 'text/html');

echo $mailer->send($message) ? $result = "Message sent successfully" : $result = "Sending Failed";
*/
