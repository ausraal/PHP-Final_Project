<?php
namespace Project\Controllers;

use Project\Frameworks\DIContainer;
use Project\Repositories\ReservationRepository;

class DeleteController {
    public function __construct(private DIContainer $container)
    {
    }
    public function delete($id){
        $formId = $_POST['id'];
        $filt = $this->container->get(ReservationRepository::class);
        try {
            $reservations = $filt->remove($formId);
            $dataList = $filt->get();
            $message = 'Registracija panaikinta';
            $filt->save($reservations);
        }catch (\Exception $e) {
            $message = $e->getMessage();
        }
    header("Location: /Views/reservationList.php");

    return $dataList;
    }

}