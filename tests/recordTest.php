<?php
declare(strict_types=1);

use FirstProject\Framework\TestCase;

final class recordTest extends TestCase
{
    public function testFactoryFileExists() {
        $this->assertFileExists('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/src/record.php');
    }
    public function testFailure()
    {
        $this->assertFileIsReadable('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/src/record.php');
    }
    public function testFileObject() {
        $this->assertInstanceOf(record::returnArray(), new record());
    }

}