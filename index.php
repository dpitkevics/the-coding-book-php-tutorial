<?php

// We define a ID prefix that should be used when creating a car
const ID_PREFIX = 'CAR';

/**
 * @param string|null $id
 *
 * @return array
 */
function createCar(string $id = null): ?array
{
    // We check `$id` variable is passed or not. If it is not passed, we set it to a generated unique ID
    if (!$id) {
        $id = ID_PREFIX . uniqid(); // `uniqid` is a function that generates a unique ID and returns
    } else {
        if (strpos($id, ID_PREFIX) !== 0) {
            return null;
        }
    }

    $car = [
        'id' => $id,
        'position' => [
            'x' => 0,
            'y' => 0,
        ], // remember to add a trailing comma for the last element of array
    ];

    return $car;
}

/**
 * @param array $car
 */
function driveCar(array &$car): void
{
    $car['position']['x'] += 1;
    $car['position']['y'] += 2;
}

$car = createCar('CAR125'); // we create a car
// We check if car is actually created or not and echo message and exit if it is not created
if (!$car) {
    echo 'Car is not built';
    exit;
}

driveCar($car); // we drive that car

var_dump($car);
