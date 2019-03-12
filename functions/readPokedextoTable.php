<?php
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-12
 * Time: 09:54
 */

class PokedexTable
{

    public static function readPokedextoTable(String $filename, String $class): array
    {
        $items = Array();
        $pokemonNames = '';
        $num = 0;

        if (($door = fopen($filename, "r")) !== FALSE) {
            while (($line = fgetcsv($door, 150, ",")) !== FALSE) {
                if ($num == 0) {
                    $pokemonNames = $line;
                } else {
                    $items[] = (object)array_combine($pokemonNames, $line);
                }
                $num++;
            }
            fclose($door);
        }

        echo $items;
    }
}
