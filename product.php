<?php

$products = ['Nike', 'Adidas', 'Puma', 'Reebok'];

function add_product(&$data, $nama) {
   array_push($data, $nama);
}

function get_products($data)
{
   foreach ($data as $product) {
       echo $product . ' ';
   }
}

add_product($products, 'Airwalk');
get_products($products);