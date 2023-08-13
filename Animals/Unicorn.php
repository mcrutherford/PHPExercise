<?php

require_once __DIR__.'/Animal.php';

/*
 * A unicorn class that says that they are not real
 */
class Unicorn extends Animal {
    public function __construct(string $name) {
        $this->sound = 'Unicorns are not real!';
        parent::__construct($name);
    }
}