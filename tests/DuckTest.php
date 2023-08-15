<?php
require_once __DIR__.'/../src/main.inc.php';

use PHPUnit\Framework\TestCase;

class DuckTest extends TestCase {
    public function testSpeak(): void {
        $animal = new Duck('Donald');
        $this->assertEquals('Donald says "QUACK"', $animal->speak());
    }
}