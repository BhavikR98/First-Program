<?php
use takeCSV;
use setUpWeb;
use recordFactory;
use record;
class Pokedex
{
    static public function start($filename) {
        $records = takeCSV::getRecords($filename);
        $table = setUpWeb::setUp($records);
    }
}

