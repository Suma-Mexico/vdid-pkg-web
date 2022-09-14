<?php

namespace SumaMexicoVdidPkgWeb;

include "services/popup.php";
include "services/redirect.php";

class WebVerification
{
    protected string $api_key;

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
    }

    public function getApiKey()
    {
        return $this->api_key;
    }

    public static function verifyIdentity(string $identifier, string $method = 'redirect')
    {
        $key = self::getApiKey();
        if ($method === 'popup') {
            popup($key, $identifier);
        } else {
            redirect($key, $identifier);
        }
    }
}
