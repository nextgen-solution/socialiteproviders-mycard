<?php

namespace NextGenSolution\MyCard;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MyCardExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'mycard', __NAMESPACE__.'\Provider'
        );
    }
}
