<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testLastNameFemale()
    {
        self::assertEquals('а', substr($this->faker->lastName('female'), -2, 2));
    }

    public function testLastNameMale()
    {
        self::assertNotEquals('а', substr($this->faker->lastName('male'), -2, 2));
    }

    public function testLastNameRandom()
    {
        self::assertNotNull($this->faker->lastName());
    }

    public function testInn12()
    {
        $this->assertMatchesRegularExpression('/^[0-9]{12}$/', $this->faker->inn12);
        $this->assertEquals("77", substr($this->faker->inn12("77"), 0, 2));
        $this->assertEquals("02", substr($this->faker->inn12(2), 0, 2));
    }

    public function checksumProvider(): array
    {
        return [
            ['1001209581', '40'],
            ['4711001027', '19'],
            ['1011006675', '54'],
            ['1001225767', '00'],
            ['7825082670', '54'],
            ['1001086821', '90']
        ];
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testInn12Checksum($inn10, $checksum)
    {
        self::assertSame($checksum, $this->faker->inn12Checksum($inn10), $inn10);
    }

    public function inn12ValidatorProvider(): array
    {
        return [
            ['100120958140', true],
            ['471100102719', true],
            ['101100667554', true],
            ['100122576700', true],
            ['782508267054', true],
            ['111111111111', false],
            ['012345678910', false],
        ];
    }

    /**
     * @dataProvider inn12ValidatorProvider
     */
    public function testInn12IsValid($inn10, $isValid)
    {
        self::assertSame($isValid, $this->faker->inn12IsValid($inn10), $inn10);
    }

    public function testOgrn15()
    {
        $this->assertMatchesRegularExpression('/^[0-9]{15}$/', $this->faker->ogrn15);
        $this->assertEquals("77", substr($this->faker->ogrn15("77"), 3, 2));
        $this->assertEquals("02", substr($this->faker->ogrn15(2), 3, 2));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
