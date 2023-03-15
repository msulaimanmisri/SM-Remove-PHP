<?php

/**
 * @author SulaimanMisri
 */

class BaseClass
{
    public $error;
    public function execudeTheCode()
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    }
}
