<?php
declare(strict_types=1);

use FirstProject\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testFactoryFileExists() {
        $this->assertFileExists('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/src/Factory.php');
    }
    public function testFailure()
    {
        $this->assertFileIsReadable('/Users/shehabibrahim/PhpstormProjects/TheFirstProgram/src/Factory.php');
    }
    public function testFileObject() {
        $this->assertInstanceOf(Factory::create(), new Factory());
    }

}
