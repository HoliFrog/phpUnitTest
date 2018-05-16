<?php

namespace Tests\Unit;

use App\DonationFee;
use App\Exceptions\IntervalException;
use App\Exceptions\MaxComException;
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
        $expected = 100-(100*0.1)-50;
        $this->assertEquals($expected, $actual);
    }
    public function testCommissionPercentage()
    {
        $this->expectException(IntervalException::class);

        $donationFees = new DonationFee(100, 31);


    }
    public function testMinAmount()
    {
        $this->expectException(\Exception::class);

        $donationFees = new DonationFee(85, 31);


    }
    public function testFixedAndCommissionFeeAmount()
    {


        //GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 10);

        //WHEN
        // Lorsque qu'on appel la méthode getFixedAndCommissionFeeAmount()
        $actual = $donationFees->getFixedAndCommissionFeeAmount();

        //THEN
        // Alors la Valeur du don doit être inférieur à 500
        $expected = 60;
        $this->assertEquals($expected, $actual);

    }
    public function testMaxCommission()
    {
        //GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(500000, 30);

        //WHEN
        // Lorsque qu'on appel la méthode getFixedAndCommissionFeeAmount()
        $actual = $donationFees->getFixedAndCommissionFeeAmount();

        //THEN
        // Alors la Valeur du don doit être inférieur à 500
        $expected = 500;
        $this->assertEquals($expected, $actual);

    }

    public function testGetSummary()
    {
        //GIVEN
        // Etant donné une donation de 100 et commission de 10%
        $donationFees = new DonationFee(100, 10);

        //WHEN
        // Lorsque qu'on appel la méthode getFixedAndCommissionFeeAmount()
        $actual = $donationFees->getSummary();

        //THEN
        // Alors la Valeur du don doit être inférieur à 500
        $expected = array(
            "donation"=>100,
            "perCom"=>10,
            "comAmount"=>10,
            "amCollected"=>40,
            "fixedfee"=>50,
            "totCom"=>60);
        $this->assertEquals(count($expected), count($actual));
        $this->assertSameSize($expected,$actual);
        $this->assertEquals($expected,$actual);
        $this->assertArrayHasKey('donation',$actual);

    }
}
