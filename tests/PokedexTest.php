<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PokedexTest extends TestCase
{
    public function testDataDirectory() {
        $this->assertDirectoryExists('data');
    }
    public function testCSVFileExists() {
        $this->assertFileExists('/data/pokemon.csv');
    }
    public function testreadPokedextoTableworks() {
        $this->assertClassHasAttribute(Pokedex::class, new Pokedex());
    }
    public function testSRCDirectory(){
        $this->assertDirectoryExists('src');
    }
    public function testTestDirectory(){
        $this->assertDirectoryExists('tests');
    }
    public function testDataDirectoryIsReadable(){
        $this->assertDirectoryisReadable('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/data');
    }
    public function testSRCDirectoryIsReadable(){
        $this->assertDirectoryisReadable('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/src');
    }
    public function testTestDirectoryisReadable(){
        $this->assertDirectoryisReadable('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/tests');
    }
    public function testFileObject() {
        $this->assertInstanceOf(Pokedex::class, new Pokedex());
    }
    public function testReadCSVtoArrayExists() {
        $this->assertTrue(
            method_exists(Pokedex::class, 'readCSVtoArray')
        );
    }
    public function testReadCSVtoArray() {
        $records = Pokedex::readCSVtoArray("data/pokemon.csv",'Pokemon');
        print_r($records);
    }
}

