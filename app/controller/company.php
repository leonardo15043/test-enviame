<?php
require_once '../model/company.php';

class companyController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Company();
    }

    public function getAllCompanies(){

        $data = new Company();
        $data = $this->model->getAll();
        
        return $data;
    }
    
}