<?php 

require '../inventory_data.php';


/**
 * Increase the quantity of each variant by a given amount.
 * Print the updated quantity of each variant.
 * 
 * @param array $inventory Array of products with their variants and stock information
 * @param int $increaseAmount The amount to increase each variant's quantity by
 */ 


function increaseInventoryQuantities ( $inventory, $increaseAmmount ) {
    foreach ( $inventory as $product ) {

        foreach ( $product['variants'] as &$variant ) {
            $variant['quantity'] += $increaseAmmount;
            echo "{$product['name']} {$variant['model']} {$variant['color']} {$variant['size']} now has {$variant['quantity']} units. <br>";
        }
        
    }
}

increaseInventoryQuantities( $inventory, 2 ); 