<?php
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-13
 * Time: 16:53
 */
use takeCSV;
use setUpWeb;
use Pokedex;
use record;
class Factory {
    public static function create(Array $Pokemon = null, Array $values = null) {
        $record = new record($Pokemon, $values);
        return $record;
    }
}

