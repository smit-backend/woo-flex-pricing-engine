<?php

return [
    'enabled' => env('WOO_FLEX_PRICING_ENGINE_ENABLED', true),
    'timeout' => env('WOO_FLEX_PRICING_ENGINE_TIMEOUT', 30),
    'log_channel' => env('WOO_FLEX_PRICING_ENGINE_LOG', 'stack'),
];
