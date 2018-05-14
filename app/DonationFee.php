<?php
/**
 * Created by PhpStorm.
 * User: laurentbeauvisage
 * Date: 07/05/2018
 * Time: 14:07
 */

namespace App;


class DonationFee
{

    private $donation;
    private $commissionPercentage;

    public function __construct($donation, $commissionPercentage)
    {
        $this->donation = $donation;
        $this->commissionPercentage = $commissionPercentage;
    }

    /**
     * @param $donation
     * @param $commissionPercentage
     * @return float|int
     */
    public function getCommissionAmount()
    {
        return $this->donation * (1/$this->commissionPercentage);
    }
}