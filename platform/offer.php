<?php
class Offer{
    public $offer_id;
    public $title;
    public $details;
    public $price;
    public $picture_url;
    public $categ_id;
    public $company_id;
    public function __construct(){

    }
    public function get_all_offers($conn) {
        $sql = "SELECT offers.*, companyaccounts.companyname AS company_name
            FROM offers
            JOIN companyaccounts ON offers.company_id = companyaccounts.id";
        $result = $conn->query($sql);

        $offers = [];
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $offers[] = $row;
            }
        }
        return $offers;
    }
}