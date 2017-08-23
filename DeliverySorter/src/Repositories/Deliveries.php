<?php

namespace DeliverySorter\Repositories;


class Deliveries
{

    private $deliveries = [
        [
            "Departure"             => "Fazenda​ ​São​ ​Francisco​ ​Citros",
            "Arrival"               => "São​ ​Paulo–Guarulhos​ ​International Airport",
            "Transportation"        => "Truck",
            "Company"               => "Correios",
        ],
        [
            "Departure"             => "São​ ​Paulo–Guarulhos​ ​International​ ​Airport",
            "Arrival"               => "Porto​ ​International Airport",
            "Transportation"        => "Plane",
            "Company"               => "LATAM",
        ],
        [
            "Departure"             => "​Porto​ ​International​ ​Airport",
            "Arrival"               => "​Adolfo​ ​Suárez​ ​Madrid–Barajas​ ​Airport",
            "Transportation"        => "Van",
            "Company"               => "AnyVan",
        ],
        [
            "Departure"             => "Adolfo​ ​Suárez​ ​Madrid–Barajas​ ​Airport",
            "Arrival"               => "​London​ ​Heathrow",
            "Transportation"        => "Plane",
            "Company"               => "DHL",
        ],
        [
            "Departure"             => "​London​ ​Heathrow",
            "Arrival"               => "Loft​ ​Digital,​ ​London,​ ​UK",
            "Transportation"        => "Van",
            "Company"               => "CitySprint",
        ],
    ];
    

    public function __construct($deliveries = [])
    {
        if (count($deliveries)) {
            $this->deliveries = $deliveries;
        }
    }
    

    public function getDeliveries()
    {
        return $this->deliveries;
    }
}
