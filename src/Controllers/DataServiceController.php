<?php
namespace Project\Controllers;

abstract class DataServiceController{

     abstract function getData(string $location);

     public function saveData(string $location, array $data){}
}