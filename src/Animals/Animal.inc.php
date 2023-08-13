<?php

/*
 * This is the Animal class that serves as the base class for different types of animals.
 */
abstract class Animal {
    protected string $name;

    /*
     * Create an animal, all animals must have a name
     */
    public function __construct(string $name) {
        $this->name = $name;
    }

    /*
     * Get the animal name
     */
    public function getName(): string {
        return $this->name ?? '';
    }

    abstract public function speak(): string;
}