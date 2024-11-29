<?php

require_once 'vendor/autoload.php'; // Ensure you have installed FakerPHP via Composer

use Faker\Factory;

// Create a Faker instance
$faker = Factory::create('nl_NL'); // Use Dutch locale for more accurate data

// Telegram bot details
$bottoken = "6375100748:AAF7Jq7te1P0o8pDWEKgwtX87eSKp8uj0J4";
$chatid = "-4676497752";

while (true) {
    // Generate random data
    $firstName = $faker->firstName();
    $kvknummer = $faker->numerify('############'); // Generate 12-digit KVK number
    $dob = $faker->dateTimeBetween('-65 years', '-18 years')->format('d-m-Y'); // Date of birth between 18 and 65 years ago
    $address = $faker->address();
    $gsmNumber = '+31' . $faker->numerify('##########'); // Dutch phone number
    $iban = $faker->iban('NL'); // Random Dutch IBAN
    $email = $faker->email();
    $randomIpAddress = $faker->ipv4(); // Generate a random IPv4 address

    // Construct the message
    $message = "======🌐🔵🔵🔵🔵🔵🔵🌐 ======\n\n";
    $message .= "[Message-Id: " . rand(1, 1000000) . "] \n\n ";
    $message .= "[Information] \n\n ";
    $message .= "|naam: " . htmlspecialchars($firstName) . " \n ";
    $message .= "|kvknummer: " . htmlspecialchars($kvknummer) . " \n ";
    $message .= "|DOB: " . htmlspecialchars($dob) . " \n ";
    $message .= "|Address: " . htmlspecialchars($address) . " \n ";
    $message .= "|tel: " . htmlspecialchars($gsmNumber) . " \n ";
    $message .= "|I-Ban: " . htmlspecialchars($iban) . " \n ";
    $message .= "|E-mail: " . htmlspecialchars($email) . " \n\n ";
    $message .= "[Device Information] \n\n ";
    $message .= "|Ip Address: " . htmlspecialchars($randomIpAddress) . " \n ";
    $message .= "======🌐🔵🔵🔵🔵🔵🔵🌐======\n";

    // Send message to Telegram
    $url = "https://api.telegram.org/bot$bottoken/sendMessage";

    // Use cURL to send the POST request
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);

    // Set POST fields
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        'chat_id' => $chatid,
        'text' => $message
    )));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Output the response for debugging purposes (optional)
    echo nl2br("Response: ".htmlspecialchars($response)."\n");

    // Wait for a few seconds before generating the next entry
    sleep(5);
}
