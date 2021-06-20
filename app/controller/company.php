<?php
require_once '../model/company.php';

class CompanyController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Company();
    }

    public function getAllCompanies(){
        $data = $this->model->getAll(); 
        return $data;
    }

    public function addCompany($company){
        $this->model->addCompany($company);
    }
    
    public function delete($id){
        $this->model->deleteCompany($id);
    }

    public function getCompany($id){
        return $this->model->getCompany($id);
    }

    public function editCompany($company){
        $this->model->editCompany($company);
    }

}