<?php

class Pokedex
{

    public static function readPokedextoTable(String $filename, String $class):array
    {
        $things = Array();
        $pokemonNames = '';
        $num = 0;

        if (($door = fopen($filename, "r")) !== FALSE) {
            while (($line = fgetcsv($door, 150, ",")) !== FALSE) {

                if($num == 0) {
                    $pokemonNames = $line;
                } else {
                    $things[] = (object) array_combine($pokemonNames, $line);
                }
                $num++;
            }
            fclose($door);
        }

        return $things;
    }


}