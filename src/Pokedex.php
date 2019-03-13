<?php

class Pokedex
{
    static public function start($filename) {
        $records = takeCSV::getRecords($filename);
        $table = html::generateTable($records);
    }
}