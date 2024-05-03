<?php

use App\FuelDAO;
use App\FuelReceiptDTO;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receipt = new \App\FuelReceiptDTO();
    $receipt->carNumber = $_POST['license_plate'];
    $receipt->date = $_POST['date_time'];
    $receipt->odometer = $_POST['odometer'];
    $receipt->petrolStation = $_POST['petrol_station'];
    $receipt->fuelType = $_POST['fuel_type'];
    $receipt->price = $_POST['fuel_price'];
    $receipt->quantity = $_POST['refueled'];
    $receipt->total = $_POST['total'];
    $receipt->currency = $_POST['currency'];

    (new FuelDAO())->saveFuelReceipt($receipt);
}

?>