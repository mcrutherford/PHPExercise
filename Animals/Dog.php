<?php

require_once __DIR__.'/Animal.php';

/*
 * A dog class that says 'Woof!'
 */
class Dog extends Animal {
    public function __construct(string $name) {
        $this->sound = 'Woof!';
        parent::__construct($name);
    }
}