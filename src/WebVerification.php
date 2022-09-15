<?php

namespace VdidPkgWeb;

include "helpers/redirect.php";

class WebVerification
{
    protected static string $api_key;

    public function __construct(string $key)
    {
        self::$api_key = $key;
    }

    public static function verifyIdentity(string $identifier, string $method = 'redirect')
    {
        $key = self::$api_key;

        redirect($key, $identifier, $method);
    }
}
