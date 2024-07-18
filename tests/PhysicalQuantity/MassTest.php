<?php

namespace PhpUnitsOfMeasureTest\PhysicalQuantity;

use PhpUnitsOfMeasure\PhysicalQuantity\Mass;

class MassTest extends AbstractPhysicalQuantityTestCase
{
    protected $supportedUnitsWithAliases = [
        'kg',
        'kilogram',
        'kilograms',
        'Yg',
        'yottagram',
        'yottagrams',
        'Zg',
        'zettagram',
        'zettagrams',
        'Eg',
        'exagram',
        'exagrams',
        'Pg',
        'petagram',
        'petagrams',
        'Tg',
        'teragram',
        'teragrams',
        'Gg',
        'gigagram',
        'gigagrams',
        'Mg',
        'megagram',
        'megagrams',
        'hg',
        'hectogram',
        'hectograms',
        'dag',
        'decagram',
        'decagrams',
        'g',
        'gram',
        'grams',
        'dg',
        'decigram',
        'decigrams',
        'cg',
        'centigram',
        'centigrams',
        'mg',
        'milligram',
        'milligrams',
        'µg',
        'microgram',
        'micrograms',
        'ng',
        'nanogram',
        'nanograms',
        'pg',
        'picogram',
        'picograms',
        'fg',
        'femtogram',
        'femtograms',
        'ag',
        'attogram',
        'attograms',
        'zg',
        'zeptogram',
        'zeptograms',
        'yg',
        'yoctogram',
        'yoctograms',
        't',
        'ton',
        'tons',
        'tonne',
        'tonnes',
        'lb',
        'lbs',
        'pound',
        'pounds',
        'oz',
        'ounce',
        'ounces',
        'st',
        'stone',
        'stones',
    ];

    protected function instantiateTestQuantity()
    {
        return new Mass(1, 'kg');
    }

    public function testToGrams()
    {
        $quantity = new Mass(5, 'kg');
        $this->assertEquals(5000, $quantity->toUnit('g'));
    }

    public function testToMilligrams()
    {
        $quantity = new Mass(5, 'kg');
        $this->assertEquals(5*1e6, $quantity->toUnit('mg'));
    }

    public function testToPounds()
    {
        $quantity = new Mass(16, 'oz');
        $this->assertEquals(1, $quantity->toUnit('pound'));
    }

    public function testToStones()
    {
        $quantity = new Mass(14, 'pound');
        $this->assertEquals(1, $quantity->toUnit('st'));
    }

    public function testBales500LbsToMetricTonnes(){
        $quantity = new Mass(1, 'Bales (500 lbs)');
        $this->assertEquals( 0.2267962, $quantity->toUnit('t'));
    }

    public function testBales330LbsToMetricTonnes(){
        $quantity = new Mass(1, 'Bales (330 lbs)');
        $this->assertEquals( 0.1496855, $quantity->toUnit('t'));
    }

    public function testBags60KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (60 kgs)');
        $this->assertEquals( 0.06, $quantity->toUnit('t'));
    }

    public function testBags46KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (46 kgs)');
        $this->assertEquals( 0.046, $quantity->toUnit('t'));
    }

    public function testBags69KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (69 kgs)');
        $this->assertEquals( 0.069, $quantity->toUnit('t'));
    }

    public function testBags30KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (30 kgs)');
        $this->assertEquals( 0.03, $quantity->toUnit('t'));
    }

    public function testBags55KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (55 kgs)');
        $this->assertEquals( 0.055, $quantity->toUnit('t'));
    }
    public function testBags56KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (56 kgs)');
        $this->assertEquals( 0.056, $quantity->toUnit('t'));
    }

    public function testBags57KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (57 kgs)');
        $this->assertEquals( 0.057, $quantity->toUnit('t'));
    }

    public function testBags65KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (65 kgs)');
        $this->assertEquals( 0.065, $quantity->toUnit('t'));
    }

    public function testBags100KgsToMetricTonnes(){
        $quantity = new Mass(1, 'Bags (100 kgs)');
        $this->assertEquals( 0.1, $quantity->toUnit('t'));
    }

    public function testBushelSoyaToMetricTonnes(){
        $quantity = new Mass(1, 'Bushel (Soya)');
        $this->assertEquals( 0.0272155, $quantity->toUnit('t'));
    }

    public function testBushelCornToMetricTonnes(){
        $quantity = new Mass(1, 'Bushel (Corn)');
        $this->assertEquals( 0.0254, $quantity->toUnit('t'));
    }

    public function testBushelOatsToMetricTonnes(){
        $quantity = new Mass(1, 'Bushel (Oats)');
        $this->assertEquals( 0.014515, $quantity->toUnit('t'));
    }

    public function testBushelWheatToMetricTonnes(){
        $quantity = new Mass(1, 'Bushel (Wheat)');
        $this->assertEquals( 0.0272155, $quantity->toUnit('t'));
    }

    public function testCWTToMetricTonnes(){
        $quantity = new Mass(1, 'CWT');
        $this->assertEquals( 0.0453592, $quantity->toUnit('t'));
    }


    public function testRollToMetricTonnes(){
        $quantity = new Mass(1, 'Roll');
        $this->assertEquals( 0.0453592, $quantity->toUnit('t'));
    }
}
