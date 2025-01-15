<?php

require '../inventory_data.php';

/**
 * Calculate the average price of the variants for each products.
 * Print the average price for each product
 * @param array $inventory Array of products with their variants and price information
 * 
 */

 function calculateAveragePricePerProduct ( $inventory ) {
    foreach ( $inventory as $product ) {
        $totalPrice = 0;
        $variantCount = count($product['variants']);

        foreach ( $product['variants'] as $variant ) {
            $totalPrice += $variant['price'];
        }

        $averagePrice = $totalPrice / $variantCount;

        echo "The average price of variants for {$product['name']} is $" . number_format( $averagePrice, 2) . "<br>";
    }
 }

 calculateAveragePricePerProduct( $inventory );