<?php
/**
 * Created by PhpStorm.
 * User: laurentbeauvisage
 * Date: 07/05/2018
 * Time: 14:07
 */

namespace App;


use App\Exceptions\IntervalException;
use App\Exceptions\MaxComException;

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
        if ($commissionPercentage < 0 || $commissionPercentage > 30) {
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
        return $this->donation - $this->getFixedAndCommissionFeeAmount();
    }

    /**
     * @return mixed
     * @throws MaxComException
     */
    public function getFixedAndCommissionFeeAmount()
    {
        $tot = $this->getCommissionAmount() + self::FIXEDFEE;
        if ($tot >= 500) {
            return 500;
        }

        return $tot;

    }
    public function getSummary(){

        $summary = array(
            "donation"=>$this->donation,
            "perCom"=>$this->commissionPercentage,
            "comAmount"=>$this->getCommissionAmount(),
            "amCollected"=>$this->getAmountCollected(),
            "fixedfee"=>self::FIXEDFEE,
            "totCom"=>$this->getFixedAndCommissionFeeAmount());
        return $summary;

    }
}