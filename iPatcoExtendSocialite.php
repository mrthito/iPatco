<?php

namespace MrThito\iPatco;

use SocialiteProviders\Manager\SocialiteWasCalled;

class iPatcoExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled): void
    {
        $socialiteWasCalled->extendSocialite('ipatco', Provider::class);
    }
}
