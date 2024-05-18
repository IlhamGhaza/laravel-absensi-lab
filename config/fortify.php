<?php

use Laravel\Fortify\Features;

return [



    'guard' => 'web',



    'passwords' => 'users',



    'username' => 'email',

    'email' => 'email',



    'lowercase_usernames' => true,



    'home' => '/home',



    'prefix' => '',

    'domain' => null,



    'middleware' => ['web'],



    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],



    'views' => true,



    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        Features::emailVerification(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,

        ]),
    ],

];
