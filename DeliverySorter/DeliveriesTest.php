<?php

declare(strict_types=1);

namespace DeliverySorter\Repositories;

use DeliverySorter\DeliveriesSorter;
use PHPUnit\Framework\TestCase;


require_once 'src/DeliveriesSorter.php';


final class DeliveriesTest extends TestCase
{
    private $ba;

    public function setup()
    {
        $this->dt = new DeliveriesSorter();
    }

    public function testRecursiveMethod()
    {
        $result = $this->dt = new DeliveriesSorter();

        $this->assertEquals('test', $this->dt->buildJourney());
    }
    
}