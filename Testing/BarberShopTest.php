<?php

use PHPUnit\Framework\TestCase;

require 'BarberShop.php';

class BarberShopTest extends TestCase {
    public function testGetAvailableEmployees() {
        $barberShop = new BarberShop();
        $available = $barberShop->getAvailableEmployees();
        $this->assertCount(2, $available); 
        $this->assertContains('Aldo', $available);
        $this->assertContains('Sidita', $available);
    }

    public function testNoAvailableEmployees() {
        $barberShop = new BarberShop();
       
        $barberShop = $this->getMockBuilder(BarberShop::class)
                           ->onlyMethods(['getAvailableEmployees'])
                           ->getMock();
        $barberShop->method('getAvailableEmployees')->willReturn([]);
        
        $available = $barberShop->getAvailableEmployees();
        $this->assertEmpty($available);
    }
}
