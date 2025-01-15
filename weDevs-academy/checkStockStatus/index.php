<?php

require '../inventory_data.php';

/**
 * This function checks the stock status for each variant of each product.
 * it loop through the inventory and prints if a variant is in stock or out of stock.
 * @param array $inventory Array of products with their variants and stock information
 */ 

function checkStockStatus ( $inventory ) {
    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {
            $name       = $product['name'];
            $model      = $variant['model'];
            $color      = $variant['color'];
            $size       = $variant['size'];
            $quantity   = $variant['quantity'];

            # Check if the quantity greater than 0
            if ( $quantity > 0 ) {
                echo $name . ' ' . $model . ' ' . $color . ' ' . $size . ' ' . 'is in stock with' . ' ' . $quantity . ' ' . 'unit\'s avaiable' . '<br>';
            } else {
                echo $name . $model. $color .$size . ' ' . 'is out of stock' . '<br>';
            }
        }
    }
}

checkStockStatus( $inventory );