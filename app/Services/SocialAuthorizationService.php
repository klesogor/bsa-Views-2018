<?php

namespace App\Services;


use App\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthorizationService
{
    public function getSocialUserData(int $providerId,string $providerName): ?User
    {
        return User::where(['provider_id' => $providerId,'provider' => $providerName])->first();
    }

    public function authorize($driver,$provider):void
    {
        $providerUserEntity = $driver->user;
        $user = $this->getSocialUserData($providerUserEntity->id,$provider);
        if(!$user) { //user doesn't exists
            $user = new User;
            $user->provider_id = $providerUserEntity->id;
            $user->provider = $provider;
        }
        $user->name = $providerUserEntity->nickname;
        $user->email = $providerUserEntity->email;
        app(UserRepositoryInterface::class)->store($user);
        Auth::login($user);
    }
}