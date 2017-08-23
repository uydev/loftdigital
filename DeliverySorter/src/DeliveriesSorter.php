<?php

namespace DeliverySorter;

use DeliverySorter\Repositories\Deliveries;


class DeliveriesSorter
{

    private $deliveries;

    public function __construct($deliveries = [])
    {
        $this->deliveries = new Deliveries($deliveries);
    }
    

    public function buildJourney()
    {
        $deliveries_array = $this->deliveries->getDeliveries();
        $deliveries_count = count($deliveries_array);

        $sorted_deliveries = $this->recursiveSort($deliveries_array, $deliveries_count, 0);
        $buildHTML    = new BuildHTML();
        
        return $buildHTML->makeHTML($sorted_deliveries);
    }
    
    private function recursiveSort($deliveries_array, $deliveries_count, $start_index = 0)
    {
        if ($start_index == $deliveries_count - 1) {
            return $deliveries_array;
        }
        for ($i = $start_index; $i < $deliveries_count; $i++) {
            for ($k = $i + 1; $k < $deliveries_count; $k++) {
                if ($deliveries_array[$i]['Departure'] == $deliveries_array[$k]['Arrival']) {
                    $deliveries_array = $this->swapIndexes($deliveries_array, $i, $k);
                    
                    return $this->recursiveSort($deliveries_array, $deliveries_count, $i);
                }
            }
        }
        
        return $deliveries_array;
    }
    

    private function swapIndexes($deliveries_array, $i, $k)
    {
        $temp            = $deliveries_array[$i];
        $deliveries_array[$i] = $deliveries_array[$k];
        $deliveries_array[$k] = $temp;
        
        return $deliveries_array;
    }
}
