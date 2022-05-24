<?php

// return [
//     'secret' => env('NOCAPTCHA_SECRET'),
//     'sitekey' => env('NOCAPTCHA_SITEKEY'),
//     'options' => [
//         'timeout' => 30,
//     ],
// ];

return [
    'default'   => [
        'length'    => 11,
        'width'     => 120,
        'height'    => 34,
        'quality'   => 100,
        'math'      => true, //Enable Math Captcha
        'expire'    => 60,   //Stateless/API captcha expiration
    ],
    // ...
];