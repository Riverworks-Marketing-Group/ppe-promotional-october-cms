<?php

/**
 * Detect site url at runtime. Works along with `config('cms.linkPolicy')==='force'` to accommodate any number of
 * protocol/host combinations.
 * @param $pass_thru
 *  a default value to return. impl. as DI to make this helper a little more portable across platforms.
 * @return mixed|string
 */
function url_helper($pass_thru)
{
    if (!empty($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === '127.0.0.1') {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && !empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
        return $_SERVER['HTTP_X_FORWARDED_PROTO'] . '://' . $_SERVER['HTTP_X_FORWARDED_HOST'];
    }
    return $pass_thru;
}

return [
    'url' => url_helper(env('OC_SITE_URL', 'http://localhost')),
    'debug' => false,
    'name' => env('OC_NAME', 'OctoberCMS'),
    'timezone' => env('TZ', 'America/New_York'),
];