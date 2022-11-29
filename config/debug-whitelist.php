<?php

return [
    'enabled' => env('DEBUG_WHITELIST_ENABLED', false),
    'ip_addresses' => explode(',', env('DEBUG_WHITELIST_IP_ADDRESSES', '')),
];
