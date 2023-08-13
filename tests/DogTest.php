<?php
require_once __DIR__.'/../src/main.inc.php';

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase {
    public function testSpeak(): void {
        $animal = new Dog('Fluffy');
        $this->assertEquals('Fluffy says "Woof!"', $animal->speak());
    }
}