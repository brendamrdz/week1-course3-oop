<?php
class UberVan extends Car{
        public $brand;
        public $model;
        protected $passenger;
        public function __construct($license, $driver, $brand, $model){
        parent::__construct($license, $driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger) {
    
        if ($passenger == 6) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 6 pasajeros ";
        }
    
    }
    
}
?>