<?php
require_once '../model/deliverie.php';
require_once '../api/deliverie.php';

class DeliverieController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Deliverie();
    }

    public function sendDeliverie($data){

        $api = new DeliverieApiController();
        $api->addDeliverie($data);
       // $this->model->addCompany($data);
    }

}