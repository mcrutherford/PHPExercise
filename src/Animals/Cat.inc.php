<?php

require_once __DIR__.'/Animal.inc.php';

/*
 * A cat class that says 'meow'
 */
class Cat extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function speak(): string {
        return $this->getName().' says "WOOF"';
    }
}