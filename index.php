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

$car = createCar(); // we create a car
driveCar($car); // we drive that car

var_dump($car);
