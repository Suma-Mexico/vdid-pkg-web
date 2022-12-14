<?php
include 'constants/index.php';

function redirect(string $api_key, string $identifier, string $method)
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

    switch ($method) {
        case 'open':
            $link = "<script>window.open('" . $url . "')</script>";

            echo $link;
            break;
        case 'popup':
            $link = "<script>window.open('" . $url . "',
                    'popUpWindow',
                    'height=600,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes'
                    )</script>";

            echo $link;
            break;
        default:
            $link = "Location: " . $url;
            header($link);
            break;
    }
}
