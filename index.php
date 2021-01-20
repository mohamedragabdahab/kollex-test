<?php

require 'vendor/autoload.php';

use kollex\Dataprovider\Assortment\ProductAdapter;
use kollex\Dataprovider\Assortment\JsonProductDataProvider;
use kollex\Dataprovider\Assortment\CsvProductDataProvider;

$jsonProductData = new JsonProductDataProvider('data/wholesaler_b.json');
$productAdapter = new ProductAdapter($jsonProductData);
$data = $productAdapter->getJsonData();
//echo "<pre>";
//echo $data;
//echo "</pre>";

$csvProductData = new CsvProductDataProvider('data/wholesaler_a.csv');
$productAdapter = new ProductAdapter($csvProductData);
$data = $productAdapter->getJsonData();
//echo "<pre>";
//echo $data;
//echo "</pre>";
