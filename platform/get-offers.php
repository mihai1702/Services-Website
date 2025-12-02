<?php
header('Content-Type: application/json');
include "../db-connection.php"; 
include "offer.php";

$offerObj = new Offer();

$offers = $offerObj->get_all_offers($conn);

echo json_encode($offers);