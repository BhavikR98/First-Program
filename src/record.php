<?php
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-13
 * Time: 16:56
 */
use takeCSV;
use setUpWeb;
use Factory;
use Pokedex;
class record {
    public function __construct(Array $fieldNames = null, $values = null )
    {
        $record = array_combine($fieldNames, $values);
        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }
    public function returnArray() {
        $items = (array) $this;
        return $items;
    }
    public function createProperty($name = 'one', $value = 'Number Pokemon Type') {
        $this->{$name} = $value;
    }
}

