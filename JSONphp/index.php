<?php
/**
 * Created by PhpStorm.
 * User: ABC
 * Date: 6/29/2019
 * Time: 4:39 PM
 */
$mang = array("Ha N0i", "HCM", "Ha Nam");
class Student{
    public $name;
    public $age;
    public $location;
    public function __construct($name, $age, $location)
    {
        $this->name =$name;
        $this->age =$age;
        $this->location = $location;
    }

}

 $son = new Student("Son Hong", 23, "Ha Noi");
echo "<pre>";
print_r($mang);
echo "<pre>";
echo "<pre>";
print_r($son);
echo "<pre>";

$phpjson1=json_encode($mang);
echo "<pre>";
print_r($phpjson1);
echo "<pre>";
$phpjson2=json_encode($son);
echo "<pre>";
print_r($phpjson2);
echo "<pre>";
