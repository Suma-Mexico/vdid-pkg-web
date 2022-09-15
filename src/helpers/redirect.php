<?php
include 'constants/index.php';

function redirect(string $api_key, string $identifier)
{
    global $front_url;

    $json = array(
        'apiKey' => $api_key,
        'identifier' => $identifier,
        'popup' => false,
        'mobile' => false
    );
    $json_stringify = json_encode($json);
    $json_base64 = base64_encode($json_stringify);
    $url = $front_url . "?state=" . $json_base64;
    $link = "Location: " . $url;

    return $link;
}
