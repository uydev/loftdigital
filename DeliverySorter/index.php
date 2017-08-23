<?php

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$deliverySorter   = new DeliverySorter\DeliveriesSorter();
$journey = $deliverySorter->buildJourney();

echo "<pre>" . $journey . "</pre>";
