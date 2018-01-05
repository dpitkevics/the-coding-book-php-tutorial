<?php

/**
 * @param int|null $id
 *
 * @return array
 */
function createCar(int $id = null): array
{
    // We check `$id` variable is passed or not. If it is not passed, we set it to a generated unique ID
    if (!$id) {
        $id = uniqid(); // `uniqid` is a function that generates a unique ID and returns
    }

    $car = [
        'id' => $id, // remember to add a trailing comma for the last element of array
    ];

    return $car;
}

$carOne = createCar();
$carTwo = createCar(5);

var_dump($carOne); // `var_dump` is a function that prints any variable to screen. This function is used for debugging purposes
var_dump($carTwo);
