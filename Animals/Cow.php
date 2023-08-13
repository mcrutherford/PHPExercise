<?php

require_once __DIR__.'/Animal.php';

/*
 * A dog class that says 'Woof!'
 */
class Cow extends Animal {
    public function __construct(string $name) {
        $this->sound = 'Moo';
        parent::__construct($name);
    }
}