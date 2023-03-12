<?php
namespace Project\Controllers;

use Project\Frameworks\DIContainer;


class DownloadCSVController {
    public function __construct(private DIContainer $container)
    {
    }
    public function downloadCSV(){
        $listToDownload = $this->container->get(DataGetController::class);
        $reservationList = $listToDownload->getData('src/storage/reservations.json');
        $file  = 'Seimininko vardas;Augintinio vardas;Augintinio veisle/dydis;Rezervacijos data;Rezervacijos laikas;
        Kontaktinis telefono numeris;ID ';
        foreach ($reservationList as $reservation){
            $file .= implode(';', $reservation) . "\n";
        }
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="reservations.csv"');
        header('Content-Length: '.strlen($file));
        echo $file;
        die;
    }
}