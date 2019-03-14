<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class takeCSVTest extends TestCase
{
   public function testDataDirectory(){
       $this->assertDirectoryExists('data');
   }

   public function testCSVFileExists(){
        $this->assertFileExists('data/pokemon.csv');
    }
    public function testFileObject()
    {
        $this->assertInstanceOf(takeCSV::getRecords(), new takeCSV());
    }
}
