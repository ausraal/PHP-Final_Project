<?php
namespace Project\Controllers;

use Project\Frameworks\DIContainer;
use Project\Models\ErrorMessage;
use Project\Repositories\ReservationRepository;

class SearchController {

    public function __construct(private DIContainer $container)
    {
    }
    public function update():array {
        $formId = $_POST['id'];
        $filt = $this->container->get(ReservationRepository::class);
        try {
            $reservation = $filt->find($formId);
            $reservation['visitDate'] = $_POST['visitDate'];
            $reservation['visitTime'] = $_POST['visitTime'];
            $reservation['phoneNumber'] = $_POST['phoneNumber'];
            $filt->save($reservation);
            $dataList = $filt->get();
            $message = 'Registracija atnaujinta';
        }catch (\Exception $e) {
            $message = $e->getMessage();
        }
        require __DIR__ . '/../../Views/reservationList.php';

        return $dataList;
    }
    public function findName():array {

        $filtered = $this->container->get(ReservationRepository::class);
        $data = $filtered->get();
        $name = $_POST['search'];
        $e = $this->container->get(ErrorMessage::class);
        $filteredData = array_filter($data, function ($item) use ($name) {
            return $item['ownerName'] === $name;
        });
        $dataList = array_values($filteredData);
        if(!empty($dataList)){
            $message = 'Rezervacija surasta';
        } else {
            $message = $e->searchError();
        }

        require __DIR__ . '/../../Views/reservationList.php';

        return $dataList;
    }
}