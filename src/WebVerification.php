<?php

namespace VdidPkgWeb;

include "helpers.php";

class WebVerification
{
    protected static string $api_key;

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;
    }

    public static function verifyIdentity(string $identifier, string $method = 'redirect')
    {
        $key = self::$api_key;

        if ($method === 'popup') {
            return $key . $identifier;
        }
        return $key . $method;
    }
}
