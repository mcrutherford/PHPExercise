<?php

// This is the Animal class that serves as the base class for different types of animals.
class Animal {
    protected string $name;
    protected string $sound;

    /*
     * Create an animal, all animals must have a name
     */
    public function __construct(string $name) {
        $this->name = $name;
    }

    /*
     * Get the animal sound
     */
    public function getSound(): string {
        return $this->sound ?? '';
    }

    /*
     * Get the animal name
     */
    public function getName(): string {
        return $this->name ?? '';
    }
}