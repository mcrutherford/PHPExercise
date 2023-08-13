<?php

require_once __DIR__.'/Animal.php';

/*
 * A dog class that says 'Woof!'
 */
class Cat extends Animal {
    public function __construct(string $name) {
        $this->sound = 'meow';
        parent::__construct($name);
    }
}