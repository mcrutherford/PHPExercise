<?php

class Animal {
    protected string $name;
    protected string $sound;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getSound(): string {
        return $this->sound;
    }

    public function getName(): string {
        return $this->name;
    }
}