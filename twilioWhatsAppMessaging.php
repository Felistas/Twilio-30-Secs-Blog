<?php

require __DIR__ . "/vendor/autoload.php";

use Twilio\Rest\Client;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$twilioSid    = getenv('TWILIO_SID');
$twilioToken  = getenv('TWILIO_TOKEN');

$twilio = new Client($twilioSid, $twilioToken);

$message = $twilio->messages
                  ->create(
                      "whatsapp:+254712345678",
                      array(
                               "body" => "Greetings from Twilio :-)",
                               "from" => "whatsapp:+14155238886"
                           )
                  );
