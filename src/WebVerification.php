<?php

namespace VdidPkgWeb;

include "helpers.php";

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

        if ($method === 'popup') {
            return popup($key, $identifier);
        }
        return redirect($key, $identifier);
    }
}
