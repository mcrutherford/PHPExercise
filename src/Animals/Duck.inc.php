<?php

require_once __DIR__.'/Animal.inc.php';

/*
 * A duck class that says 'QUACK'
 */
class Duck extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function speak(): string {
        return $this->getName().' says "QUACK"';
    }
}