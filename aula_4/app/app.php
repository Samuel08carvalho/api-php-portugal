<?php

define('API_BASE', localhost/api/?option=);

echo '<p>APLICAÇÂO</p>';

$resultado = api_request('status');

echo '<pre>';
print_r($resultado);


function api-request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}