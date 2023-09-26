<?php

use NioModules\WdPaypal\WdPaypalModule;

return [
    WdPaypalModule::SLUG => [
        // 'name' => __('PayPal'),
        'name' => __('Crypto Wallet'),
        'slug' => WdPaypalModule::SLUG,
        'method' => WdPaypalModule::METHOD,
        // 'account' => __('PayPal Account'),
        'account' => __('Crypto Wallet'),
        // 'icon' => 'ni-wallet-alt',
        'icon' => 'ni-wallet-fill',
        'full_icon' => 'ni-wallet-fill',
        'is_online' => false,
        'processor_type' => 'withdraw',
        'processor' => WdPaypalModule::class,
        'supported_currency' => [
            'USD', 'EUR', 'GBP', 'CAD', 'AUD', 'TRY', 'RUB', 'INR', 'BRL', 'NGN'
        ],
        'system' => [
            'kind' => 'Withdraw',
            'info' => 'Gateway / Offline',
            'type' => WdPaypalModule::MOD_TYPES,
            'version' => WdPaypalModule::VERSION,
            'update' => WdPaypalModule::LAST_UPDATE,
            'description' => 'Manage withdraw funds manually using crypto wallet.',
            'addons' => false,
        ]
    ],
];
