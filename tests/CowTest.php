<?php
require_once __DIR__.'/../src/main.inc.php';

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase {
    public function testSpeak(): void {
        $animal = new Cow('Bertha');
        $this->assertEquals('Bertha says "Moo"', $animal->speak());
    }
}
