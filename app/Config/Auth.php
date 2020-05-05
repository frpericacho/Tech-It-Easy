<?php namespace Config;

use Myth\Auth\Config\Auth as MythAuth;

class Auth extends MythAuth
{
    public $views = [
        'login'     => 'auth/login',
        'register'  => 'auth/register',
        'forgot'    => 'auth/forgot',
        'reset'     => 'auth/reset',
        'emailForgot' => 'auth/emails/forgot',
    ];

}