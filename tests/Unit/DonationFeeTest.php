<?php

namespace Tests\Unit;

use App\DonationFee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DonationFeeTest extends TestCase
{
    /**
     * Test de la commission prélevée par le site.
     *
     * @throws \Exception
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
        // Lorsque qu'on appel la méthode getCommissionAmount()
        $actual = $donationFees->getAmountCollected();

        //THEN
        // Alors la Valeur de la commission doit être de 10
        $expected = 90;
        $this->assertEquals($expected, $actual);
    }
}
