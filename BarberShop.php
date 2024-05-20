<?php

class BarberShop {
    private $employees = [
        'Aldo' => true,   
        'Klajdi' => false,   
        'Sidita' => true
        
    ];

    
    public function getAvailableEmployees() {
        $available = [];
        foreach ($this->employees as $name => $isAvailable) {
            if ($isAvailable) {
                $available[] = $name;
            }
        }
        return $available;
    }
}
