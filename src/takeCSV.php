<?php
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-13
 * Time: 16:49
 */

class takeCSV
{
    static public function getRecords($filename) {
        $Pokedex = fopen($filename,"r");
        $Pokemon = array();
        $num = 0;
        while(! feof($Pokedex))
        {
            $record = fgetcsv($Pokedex);
            if($num == 0) {
                $Pokemon = $record;
            } else {
                $records[] = Factory::create($Pokemon, $record);
            }
            $num++;
        }
        fclose($Pokedex);
        return $records;
    }
}
