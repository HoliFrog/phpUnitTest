<?php
/**
 * Created by PhpStorm.
 * User: laurentbeauvisage
 * Date: 07/05/2018
 * Time: 14:07
 */

namespace App;


use App\Exceptions\IntervalException;

class DonationFee
{

    private $donation;
    private $commissionPercentage;
    private const FIXEDFEE = 50;

    /**
     * @return mixed
     * @throws IntervalException
     */
    public function getCommissionPercentage()
    {
        return $this->commissionPercentage;
    }

    /**
     * @param mixed $commissionPercentage
     */
    public function setCommissionPercentage($commissionPercentage): void
    {
        $this->commissionPercentage = $commissionPercentage;
    }

    public function __construct($donation, $commissionPercentage)
    {
        if ($commissionPercentage < 0 || $commissionPercentage >= 30) {
            throw new IntervalException();
        }

        if (!$donation >= 100) {
            throw new \Exception();
        }

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
        return $this->donation * (1 / $this->commissionPercentage);
    }

    public function getAmountCollected()
    {
        return $this->donation - $this->getCommissionAmount();
    }

    /**
     * @return mixed
     */
    public function getFixedAndCommissionFeeAmount()
    {
        $tot = $this->getCommissionAmount() + self::FIXEDFEE;
        if (!tot <= 500) {
            return 500;
        } else {
            return tot;
        }
    }
}