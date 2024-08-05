<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class Mass extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Kilogram
        $kilogram = UnitOfMeasure::nativeUnitFactory('kg');
        $kilogram->addAlias('kilogram');
        $kilogram->addAlias('kilograms');
        $kilogram->addAlias('(kg)');
        $kilogram->addAlias('(kg).');
        $kilogram->addAlias('(Kg).');
        static::addUnit($kilogram);

        static::addMissingSIPrefixedUnits(
            $kilogram,
            0.001,
            '%pg',
            [
                '%Pgram',
                '%Pgrams',
            ]
        );

        // Tonne (metric)
        $newUnit = UnitOfMeasure::linearUnitFactory('t', 1000);
        $newUnit->addAlias('ton');
        $newUnit->addAlias('tons');
        $newUnit->addAlias('tonne');
        $newUnit->addAlias('tonnes');
        $newUnit->addAlias('mt');
        $newUnit->addAlias('MT');
        static::addUnit($newUnit);

        // Pound
        $newUnit = UnitOfMeasure::linearUnitFactory('lb', 0.45359237);
        $newUnit->addAlias('lbs');
        $newUnit->addAlias('Lbs');
        $newUnit->addAlias('pound');
        $newUnit->addAlias('pounds');
        static::addUnit($newUnit);

        // Ounce
        $newUnit = UnitOfMeasure::linearUnitFactory('oz', 0.45359237 / 16);
        $newUnit->addAlias('ounce');
        $newUnit->addAlias('ounces');
        static::addUnit($newUnit);

        // Stone
        $newUnit = UnitOfMeasure::linearUnitFactory('st', 6.35029318);
        $newUnit->addAlias('stone');
        $newUnit->addAlias('stones');
        static::addUnit($newUnit);

        // Bales (500 lbs)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bales (500 lbs)', 226.7962);
        $newUnit->addAlias('Bales (500)');
        static::addUnit($newUnit);

        // Bales (330 lbs)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bales (330 lbs)', 149.6855);
        $newUnit->addAlias('Bales (330)');
        static::addUnit($newUnit);

        // Bags (60 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (60 kg)', 60);
        $newUnit->addAlias('Bags (60)');
        $newUnit->addAlias('Bags (60 kgs)');
        static::addUnit($newUnit);

        // Bags (46 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (46 kg)', 46);
        $newUnit->addAlias('Bags (46)');
        $newUnit->addAlias('Bags (46 kgs)');
        static::addUnit($newUnit);

        // Bags (69 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (69 kg)', 69);
        $newUnit->addAlias('Bags (69)');
        $newUnit->addAlias('Bags (69 kgs)');
        static::addUnit($newUnit);

        // Bags (30 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (30 kg)', 30);
        $newUnit->addAlias('Bags (30)');
        $newUnit->addAlias('Bags (30 kgs)');
        static::addUnit($newUnit);

        // Bags (55 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (55 kg)', 55);
        $newUnit->addAlias('Bags (55)');
        $newUnit->addAlias('Bags (55 kgs)');
        static::addUnit($newUnit);

        // Bags (56 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (56 kg)', 56);
        $newUnit->addAlias('Bags (56)');
        $newUnit->addAlias('Bags (56 kgs)');
        static::addUnit($newUnit);

        // Bags (57 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (57 kg)', 57);
        $newUnit->addAlias('Bags (57)');
        $newUnit->addAlias('Bags (57 kgs)');
        static::addUnit($newUnit);

        // Bags (65 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (65 kg)', 65);
        $newUnit->addAlias('Bags (65)');
        $newUnit->addAlias('Bags (65 kgs)');
        static::addUnit($newUnit);

        // Bags (100 kg)
        $newUnit = UnitOfMeasure::linearUnitFactory('Bags (100 kg)', 100);
        $newUnit->addAlias('Bags (100)');
        $newUnit->addAlias('Bags (100 kgs)');
        static::addUnit($newUnit);

        // bu(s)
        $newUnit = UnitOfMeasure::linearUnitFactory('bu(s)', 27.2155);
        $newUnit->addAlias('Bushel (Soya)');
        static::addUnit($newUnit);

        // bu(c)
        $newUnit = UnitOfMeasure::linearUnitFactory('bu(c)', 25.4);
        $newUnit->addAlias('Bushel (Corn)');
        static::addUnit($newUnit);

        // bu(o)
        $newUnit = UnitOfMeasure::linearUnitFactory('bu(o)', 14.515);
        $newUnit->addAlias('Bushel (Oats)');
        static::addUnit($newUnit);

        // bu(w)
        $newUnit = UnitOfMeasure::linearUnitFactory('bu(w)', 27.2155);
        $newUnit->addAlias('Bushel (Wheat)');
        static::addUnit($newUnit);

        // Rolls
        $newUnit = UnitOfMeasure::linearUnitFactory('Rolls', 500);
        static::addUnit($newUnit);

        // CWT
        $newUnit = UnitOfMeasure::linearUnitFactory('CWT', 45.3592);
        static::addUnit($newUnit);
    }
}
