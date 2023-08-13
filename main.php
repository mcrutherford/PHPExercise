<?php

require_once 'Animals/Cat.php';

function generateMessage($animalType, $name) {
    switch($animalType) {
        case 'cat':
            $animal = new Cat($name);
            break;
        case 'dog':
            $animal = new Dog($name);
            break;
        default:
            return "Unknown animal type!";
    }
    return $animal->getName() . " says '" . $animal->getSound() . "'";
}

$name = $argv[1];
$animalType = $argv[2];

echo generateMessage($animalType, $name);