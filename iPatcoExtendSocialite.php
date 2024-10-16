<?php

namespace MrThito\Ipatco;

use SocialiteProviders\Manager\SocialiteWasCalled;

class IpatcoExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('ipatco', Provider::class);
    }
}
