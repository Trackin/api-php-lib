<?php

include_once('Trackin/ApiClient.php');

$apiClient = new APIClient("trackinExt-2U-DuMMy-DaAOp-keY-bSUYdvQJ-here-NGArXalaFo", 476);

$companyService = new TrackinCompanyService($apiClient);

$companyArray = $companyService->getAllCompanies();

if (count($companyArray) > 0) {
    $companyId = $companyArray[0]->id;
    print_r($companyArray[1]->name);
    print_r("\n");

    $deliveryService = new TrackinDeliveryService($apiClient);

    $recipient = new ContactVM();
    $recipient->firstName = "John";
    $recipient->lastName = "Doe";
    $recipient->address = "35 rankin avenue";
    $recipient->city = "San Jose";
    $recipient->state = "CA";
    $recipient->zip = "95110";
    $recipient->country = "USA";

    $newDelivery = new DeliveryFormVM();
    $newDelivery->recipient = $recipient;

    $newDelivery = $deliveryService->createDelivery($companyId, $newDelivery);
    var_dump($newDelivery);

    //Let's dispatch it (we could have done it while creating the delivery, but it's better to show more examples)
    $deviceService = new TrackinDeviceService($apiClient);
    $devices = $deviceService->getAllDevices($companyId);
    if (count($devices) > 0){
        $deliveryService->dispatch($companyId, $newDelivery->id, $devices[0]);
        print_r("Dispatched!\n");
    }
}

