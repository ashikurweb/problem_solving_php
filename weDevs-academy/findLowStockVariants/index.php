<?php 

require '../inventory_data.php';

/**
 * Find products with low stock variants ( quantity less than 5 ).
 * Store details of low stock variants in an array and print them.
 * @param array $inventory Array of products with their variants and stock information
 */ 


function findLowStockVariants ( $inventory ) {
    $lowStockVariants = [];

    foreach ( $inventory as $product ) {
        foreach ( $product['variants'] as $variant ) {
            if ( $variant['quantity'] < 5 ) {

                $lowStockVariants[] = [
                    'name'      => $product['name'],
                    'model'     => $variant['model'],
                    'color'     => $variant['color'],
                    'size'      => $variant['size'],
                    'quantity'  => $variant['quantity']
                ];
            }
        }
    }

    echo 'Low stock variant\'s:' . '<br>';

    foreach ( $lowStockVariants as $variant ) {
        echo "- {$variant['name']} {$variant['model']} {$variant['color']} {$variant['size']} with {$variant['quantity']} units <br>";
    }
}

findLowStockVariants( $inventory );

