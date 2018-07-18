<?php

namespace App\Services;


use Laravel\Socialite\Facades\Socialite;

class ProviderFactory implements ProvidersFactoryInterface
{

    public function getDriver(string $provider)
    {
        switch($provider)
        {
            case 'github':
                return Socialite::driver('github');
            default:
                throw new \Exception('driver not found!');
        }
    }
}