<?php

return [


    'pdf' => [
        'enabled' => true,
        'binary'  => env('WKHTMLTOPDFANDIMAGEDIR').'wkhtmltopdf',
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],
    'image' => [
        'enabled' => true,
        'binary'  => env('WKHTMLTOPDFANDIMAGEDIR').'wkhtmltoimage',
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],


];
