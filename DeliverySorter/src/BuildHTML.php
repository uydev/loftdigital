<?php

namespace DeliverySorter;


class BuildHTML
{
    
    public function __construct()
    {
        
    }
    
    
    public function makeHtml($sorted_deliveries)
    {
        $html_string = "<ol>";
        foreach ($sorted_deliveries as $delivery) {
            switch ($delivery['Transportation']) {
                case "Truck":
                    $html_string .= $this->buildTruckHtml($delivery);
                    break;
                case "Van":
                    $html_string .= $this->buildVanHtml($delivery);
                    break;
                case "Plane":
                    $html_string .= $this->buildPlaneHtml($delivery);
                    break;
            }
        }
        
        return $html_string . $this->arrivalMsg() . "</ol>";
    }
    
    
    private function buildTruckHtml($delivery)
    {
        return "<li>Take truck $delivery[Transportation_number] from $delivery[Departure] to $delivery[Arrival].</li>";
    }
    
    
    private function buildVanHtml($delivery)
    {
        return "<li>Take the airport van from $delivery[Departure] to $delivery[Arrival]. </li>";
    }
    
  
    private function buildPlaneHtml($delivery)
    {
        return "<li>From $delivery[Departure], take flight $delivery[Transportation_number] to $delivery[Arrival].</li>";
    }
    

    private function arrivalMsg()
    {
        return "<li>You have arrived at your final destination.</li>";
    }

}