<?php
require_once __DIR__.'/../vendor/autoload.php';

// Require animal classes
require_once 'Animals/Cat.inc.php';
require_once 'Animals/Dog.inc.php';
require_once 'Animals/Cow.inc.php';
require_once 'Animals/Unicorn.inc.php';
require_once 'Animals/Duck.inc.php';

/**
 * Get an animal object from a type and name
 *
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
        'duck' => new Duck($name),
        default => throw new Exception('Unknown animal type'),
    };
}

/**
 * Generate a message for what the animal says
 *
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
        return 'Unknown animal type';
    }

    // Get the animal speaking
    return $animal->speak();
}

/**
 * Retrieve arguments from apache or cli
 *
 * @return array<string> The name and animal type
 * @throws Exception Missing a required parameter
 */
function getArguments(): array {
    global $argv;
    // Retrieve arguments from CLI or apache based on how the script was run
    if (php_sapi_name() == 'cli') {
        // Make sure arguments exist
        if (sizeof($argv) != 3) {
            throw new Exception("Incorrect arguments.\nUsage: php src/index.php [name] [type]");
        }
        // Retrieve CLI arguments
        $name = $argv[1];
        $animalType = $argv[2];
    } else {
        // Make sure arguments exist
        if (empty($_GET['name'])) {
            throw new Exception('Missing required parameter: name');
        }
        if (empty($_GET['type'])) {
            throw new Exception('Missing required parameter: type');
        }

        // Retrieve apache arguments
        $name = $_GET['name'];
        $animalType = $_GET['type'];
    }
    return [$animalType, $name];
}
