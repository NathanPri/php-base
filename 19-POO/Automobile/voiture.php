<?php

class voiture
{
    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function __destruct()
    {
        echo $this->brand;
    }
}