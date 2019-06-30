<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/29/2019
 * Time: 4:50 PM
 */
$mang ='["Ha N0i","HCM","Ha Nam"]';
$studen ='{"name":"Son Hong","age":23,"location":"Ha Noi"}';

$jsonphp1 = json_decode($mang);

echo "<pre>";
print_r($jsonphp1);
echo "<pre>";


$jsonphp2 = json_decode($studen);
echo "<pre>";
print_r($studen);
echo "<pre>";