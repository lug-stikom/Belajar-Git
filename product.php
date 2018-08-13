<?php

function getProducts()
{
    $products = ['Nike', 'Adidas', 'Puma', 'Reebok'];

    foreach ($products as $product) {
        echo $product . ' ';
    }
}

getProducts();