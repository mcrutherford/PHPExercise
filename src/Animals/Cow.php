<?php

require_once __DIR__.'/Animal.php';

/*
 * A cow class that says 'moo'
 */
class Cow extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function speak(): string {
        return $this->getName().' says "Moo"';
    }
}