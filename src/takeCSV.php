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
        $fieldNames = array();
        $num = 0;
        while(! feof($Pokedex))
        {
            $record = fgetcsv($Pokedex);
            if($num == 0) {
                $fieldNames = $record;
            } else {
                $records[] = recordFactory::create($fieldNames, $record);
            }
            $num++;
        }
        fclose($Pokedex);
        return $records;
    }
}
