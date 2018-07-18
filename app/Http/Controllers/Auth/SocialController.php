<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\ProviderFactory;
use App\Services\SocialAuthorizationService;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    private $redirectTo = '/currencies';

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(SocialAuthorizationService $service,ProviderFactory $factory,string $provider)
    {
        $service->authorize($factory->getDriver($provider),$provider);
        return redirect($this->redirectTo);
    }
}
