<?php
    $carsArray = [
                    [
                        'brand' => 'BMW',
                        'model' => 'X5',
                        'year' => 2015,
                        'engine' => 3.0,
                        'options' => [
                            'Cruise Control',
                            'Parking Sensors',
                            'Heated Seats'
                        ]
                    ],
                    [
                        'brand' => 'Mercedes',
                        'model' => 'C class',
                        'year' => 2018,
                        'engine' => 2.5,
                        'options' => [
                            'Air Conditioning',
                            'Bluetooth',
                            'Sunroof'
                        ]
                    ],
                    [
                        'brand' => 'Audi',
                        'model' => 'A4',
                        'year' => 2020,
                        'engine' => 2.0,
                        'options' => [
                            'Navigation System',
                            'Leather Seats',
                            'Backup Camera',
                            'Air Conditioning'
                        ]
                        ],
                        [
                            'brand' => 'Honda',
                            'model' => 'Civic',
                            'year' => 2021,
                            'engine' => 1.5,
                            'options' => [
                                'Sunroof',
                                'Heated Seats',
                                'Bluetooth'
                            ]
                        ]
                ];
                

    $carsWithAirConditioning = array_filter($carsArray, function($car){
        return in_array('Air Conditioning', $car['options']);
    });
    $carsWithSunroof = array_filter($carsArray, function($car){
        return in_array('Sunroof', $car['options']);
    });

    $carsMadeIn2020 = array_filter($carsArray, function($car){
        return $car['year'] === 2020;
    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Array</title>
</head>
<body>
    <h1>Cars With Sunroof</h1>
    <ul>
        <?php foreach($carsWithSunroof as $car): ?>
            <li>
                <strong>Brand:</strong> <?= $car['brand'] ?><br>
                <strong>Model:</strong> <?= $car['model'] ?><br>
                <strong>Year:</strong> <?= $car['year'] ?><br>
                <strong>Engine:</strong> <?= $car['engine'] ?><br>
                <strong>Options:</strong>
                <ul>
                    <?php foreach($car['options'] as $option): ?>
                        <li><?= $option ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
    <br><br>
    <h1>Cars With Air Conditioning</h1>
    <ul>
        <?php foreach($carsWithAirConditioning as $car): ?>
            <li>
                <strong>Brand:</strong> <?= $car['brand'] ?><br>
                <strong>Model:</strong> <?= $car['model'] ?><br>
                <strong>Year:</strong> <?= $car['year'] ?><br>
                <strong>Engine:</strong> <?= $car['engine'] ?><br>
                <strong>Options:</strong>
                <ul>
                    <?php foreach($car['options'] as $option): ?>
                        <li><?= $option ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
    <br><br>
    <h1>Cars Made in 2020</h1>
    <ul>
        <?php foreach($carsMadeIn2020 as $car): ?>
            <li>
                <strong>Brand:</strong> <?= $car['brand'] ?><br>
                <strong>Model:</strong> <?= $car['model'] ?><br>
                <strong>Year:</strong> <?= $car['year'] ?><br>
                <strong>Engine:</strong> <?= $car['engine'] ?><br>
                <strong>Options:</strong>
                <ul>
                    <?php foreach($car['options'] as $option): ?>
                        <li><?= $option ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>