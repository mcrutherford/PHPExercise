<?php

require_once __DIR__.'/Animal.inc.php';

/*
 * A unicorn class that says that they are not real
 */
class Unicorn extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function speak(): string {
        return 'Unicorns are not real!';
    }
}