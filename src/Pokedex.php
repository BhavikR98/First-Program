<?php

class Pokedex
{

    public static function readCSVtoArray(String $filename, String $class):array
    {
        $things = Array();
        $count = 0;
        $fieldNames = '';

        if (($door = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($door, 150, ",")) !== FALSE) {

                if($count == 0) {
                    $fieldNames = $row;
                } else {
                    $things[] = (object) array_combine($fieldNames, $row);
                }
                $count++;
            }
            fclose($door);
        }

        return $things;
    }


}