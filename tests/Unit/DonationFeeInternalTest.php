<?php

namespace Tests\Unit;

use App\DonationFee;
use App\Exceptions\IntervalException;
use PHPUnit\Exception;
use Tests\InternalTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DonationFeeInternalTest extends InternalTestCase
{
    /**
     * Test de la commission prélevée par le site.
     *
     * @throws \Exception
     *
     */
    public function testCommissionAmountGetter()
    {
        //GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 10);

        //WHEN
        // Lorsque qu'on appel la méthode getCommissionAmount()
        $actual = $donationFees->getCommissionAmount();

        //THEN
        // Alors la Valeur de la commission doit être de 10
        $expected = 10;
        $this->assertEquals($expected, $actual);
    }
    public function testAmountCollectedGetter()
    {
        //GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 10);

        //WHEN
        // Lorsque qu'on appel la méthode getCommissionCollected()
        $actual = $donationFees->getAmountCollected();

        //THEN
        // Alors la Valeur du don doit être de 90
        $expected = 90;
        $this->assertEquals($expected, $actual);
    }
    public function testCommissionPercentage()
    {
        $this->expectException(IntervalException::class);
        // GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 31);


    }
    public function testMinAmount()
    {
        $this->expectException(\Exception::class);
        // GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 31);


    }
}
