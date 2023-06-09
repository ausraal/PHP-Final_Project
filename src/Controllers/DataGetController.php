<?php
namespace Project\Controllers;
class DataGetController extends DataServiceController
{

    public function getData(string $location):array
    {
        $extractedData = file_get_contents($location);
        if ($extractedData){
            $extracted = json_decode($extractedData, true);
        } else {
            $extracted = [];
        }
        return $extracted;
    }

}