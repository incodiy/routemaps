<?php

return [
    'osrm_url' => env('OSRM_URL', 'http://router.project-osrm.org'),
    'fuel_consumption' => [
        'motor_carburator' => ['min' => 30, 'max' => 40],
        'motor_injection' => ['min' => 35, 'max' => 45],
        'car' => ['min' => 10, 'max' => 15]
    ]
];
