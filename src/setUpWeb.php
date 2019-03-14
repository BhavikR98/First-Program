<?php
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-13
 * Time: 20:33
 */
use takeCSV;
use Factory;
use Pokedex;
use record;
class setUpWeb {
    public static function setUp($records) {
        $num = 0;
        foreach ($records as $record) {
            if($num == 0) {
                $array = $record->returnArray();
                $fields = array_keys($array);
                $values = array_values($array);
                print_r($fields);
                print_r($values);
            } else {
                $array = $record->returnArray();
                $values = array_values($array);
                print_r($values);
            }
            $num++;
        }
    }
}