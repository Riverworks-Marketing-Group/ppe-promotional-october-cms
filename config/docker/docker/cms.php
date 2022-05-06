<?php

return [
    'linkPolicy' => 'force',
    'backendTimezone' => env('TZ', 'America/New_York'),
    'backendForceSecure' => false,
    'enableSafeMode' => false,
    'activeTheme' => env('OC_THEME', 'demo'),
    'enableRoutesCache' => false,
    'enableAssetCache' => true,
    'enableAssetMinify' => true,
    'enableAssetDeepHashing' => false,
];