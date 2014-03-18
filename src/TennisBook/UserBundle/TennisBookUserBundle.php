<?php

namespace TennisBook\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TennisBookUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
