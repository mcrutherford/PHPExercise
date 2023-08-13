<?php
require_once __DIR__.'/../src/main.inc.php';

use PHPUnit\Framework\TestCase;

class CatTest extends TestCase {
    public function testSpeak(): void {
        $animal = new Cat('Mr Pickles');
        $this->assertEquals('Mr Pickles says "meow"', $animal->speak());
    }
}