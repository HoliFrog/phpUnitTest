<?php

namespace App\Exceptions;

use Exception;

class IntervalException extends Exception
{


    public function __construct()

    {

        parent::__construct('Un nombre entre 0 et 30 SVP!!');

    }
}
