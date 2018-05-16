<?php

namespace App\Exceptions;

use Exception;

class MaxComException extends Exception
{
    public function __construct()

    {

        parent::__construct('Attention, Commission supérieur à 5 euros');

    }
}
