<?php

$inventory = [
    [
        "name" => "Laptop",
        "variants" => [
            ["model" => "X123", "color" => "Silver", "size" => "15-inch", "quantity" => 5, "price" => 700],  // 5 * 700 = 3500
            ["model" => "X124", "color" => "Black", "size" => "13-inch", "quantity" => 3, "price" => 650],   // 3 * 650 = 1950
        ],
        "in_stock" => true,
    ],
    [
        "name" => "Mouse",
        "variants" => [
            ["model" => "M001", "color" => "Black", "size" => "Standard", "quantity" => 10, "price" => 25],   // 10 * 25 = 250
            ["model" => "M002", "color" => "White", "size" => "Compact", "quantity" => 5, "price" => 30],     // 5 * 30 = 150
        ],
        "in_stock" => true,
    ],
    [
        "name" => "Keyboard",
        "variants" => [
            ["model" => "K001", "color" => "Black", "size" => "Full", "quantity" => 0, "price" => 30],    // 0 * 30 = 0 (Out of stock)
            ["model" => "K002", "color" => "White", "size" => "Compact", "quantity" => 2, "price" => 28],  // 2 * 28 = 56
        ],
        "in_stock" => false,
    ],
    [
        "name" => "Monitor",
        "variants" => [
            ["model" => "M001", "color" => "Black", "size" => "24-inch", "quantity" => 2, "price" => 150],  // 2 * 150 = 300
            ["model" => "M002", "color" => "Silver", "size" => "27-inch", "quantity" => 4, "price" => 180], // 4 * 180 = 720
        ],
        "in_stock" => true,
    ],
    [
        "name" => "USB Cable",
        "variants" => [
            ["model" => "U001", "color" => "Black", "size" => "1m", "quantity" => 15, "price" => 5],   // 15 * 5 = 75
            ["model" => "U002", "color" => "White", "size" => "2m", "quantity" => 20, "price" => 6],   // 20 * 6 = 120
        ],
        "in_stock" => true,
    ],
];
