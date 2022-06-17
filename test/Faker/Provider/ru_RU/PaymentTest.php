<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Payment;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
class PaymentTest extends TestCase
{
    public function testBic()
    {
        $this->assertMatchesRegularExpression('/^[0-9]{9}$/', $this->faker->bic());
        $this->assertEquals("77", substr($this->faker->bic("77"), 2, 2));
    }

    public function testBankAccountNumber()
    {
        $bik = $this->faker->bic();
        $this->assertMatchesRegularExpression('/^[0-9]{20}$/', $this->faker->bankAccountNumber($bik));
    }

    public function testBankCorrAccountNumber()
    {
        $bik = $this->faker->bic();
        $this->assertMatchesRegularExpression('/^[0-9]{20}$/', $this->faker->bankCorrAccountNumber($bik));
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
