<?php
namespace NS\ColorAdminSonataBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NSColorAdminSonataBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}