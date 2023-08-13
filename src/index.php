<?php
require_once __DIR__.'/main.inc.php';

try {
    [$animalType, $name] = getArguments();

    // Echo the animal speaking string
    echo generateMessage($animalType, $name)."\n";
} catch (Exception $e) {
    echo $e->getMessage()."\n";
}
