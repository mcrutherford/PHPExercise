<?php
require_once __DIR__ . '/../src/main.inc.php';
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase {
  public function testCatSpeak(): void {
    $this->assertEquals('Mr Pickles says "meow"', generateMessage('cat', 'Mr Pickles'));
  }

  public function testDogSpeak(): void {
    $this->assertEquals('Rover says "Woof!"', generateMessage('dog', 'Rover'));
  }

  public function testCowSpeak(): void {
    $this->assertEquals('Bessie says "Moo"', generateMessage('cow', 'Bessie'));
  }

  public function testUnicornSpeak(): void {
    $this->assertEquals('Unicorns are not real!', generateMessage('unicorn', 'Rainbow'));
  }

  public function testUnknownAnimalType(): void {
    $this->assertEquals('Unknown animal type', generateMessage('dragon', 'Smaug'));
  }

  public function testEmptyAnimalName(): void {
    $this->assertEquals(' says "meow"', generateMessage('cat', ''));
  }

  public function testEmptyAnimalType(): void {
    $this->assertEquals('Unknown animal type', generateMessage('', 'Mr Pickles'));
  }
}