<?php
require_once __DIR__.'/../src/main.inc.php';

use PHPUnit\Framework\TestCase;

class UnicornTest extends TestCase {
    public function testSpeak(): void {
        $animal = new Unicorn('Rainbow');
        $this->assertEquals('Unicorns are not real!', $animal->speak());
    }
}
