<?php

require '../vendor/autoload.php';

use Api\Request;

$login = getenv('CLIENT_KEY');
$password = getenv('CLIENT_PASS');
$url = getenv('URL_API');

$client = new Request($url);

$sale = $client->sendRequestSale([
    'action' => 'SALE',
    'client_key' => $login,
    'channel_id' => 'test',
    'order_id' => '1234',
    'order_amount' => '1234',
    'order_currency' => 'EUR',
    'order_description' => 'test',
    'card_number' => '1234123412341234',
    'card_exp_month' => '06',
    'card_exp_year' => '2024',
    'card_cvv2' => '123',
    'payer_first_name' => 'test',
    'payer_last_name' => 'test',
    'payer_middle_name' => 'test',
    'payer_birth_date' => '2002-02-02',
    'payer_address' => 'test',
    'payer_address2' => 'test',
    'payer_country' => 'test',
    'payer_state' => 'test',
    'payer_city' => 'test',
    'payer_zip' => '12345',
    'payer_email' => 'test@test.com',
    'payer_phone' => '393973299',
    'payer_ip' => '123.123.123.123',
    'term_url_3ds' => 'https://google.com',
    'recurring_init' => 'N',
    'auth' => 'Y',
    'hash' => 'test'
]);

var_dump($sale);
