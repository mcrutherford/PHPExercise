<?php

// Require animal classes
require_once 'Animals/Cat.php';
require_once 'Animals/Dog.php';
require_once 'Animals/Cow.php';
require_once 'Animals/Unicorn.php';

/**
 * @param string $animalType The type of animal
 * @param string $name       The name of the animal
 *
 * @return Animal The animal object
 * @throws Exception Unknown animal type
 */
function getAnimal(string $animalType, string $name): Animal {
    return match (strtolower($animalType)) {
        'cat' => new Cat($name),
        'dog' => new Dog($name),
        'cow' => new Cow($name),
        'unicorn' => new Unicorn($name),
        default => throw new Exception('Unknown animal type'),
    };
}

/**
 * @param string $animalType The type of animal
 * @param string $name       The name of the animal
 *
 * @return string The animal speaking string
 */
function generateMessage(string $animalType, string $name): string {
    // Get the animal object
    try {
        $animal = getAnimal($animalType, $name);
    } catch (Exception) {
        return "Unknown animal type";
    }

    // Build the return string
    $animalName = $animal->getName();
    $animalSound = $animal->getSound();
    return "$animalName says '$animalSound'";
}

// Retrieve CLI arguments
$name = $argv[1];
$animalType = $argv[2];

// Echo the animal speaking string
echo generateMessage($animalType, $name)."\n";