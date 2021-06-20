<?php
require_once '../model/company.php';
require_once 'core.php';


class CompanyApiController{

    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Company();
    }

    public function addCompany($data){
        if($this->model->addCompany($data)){         
            http_response_code(201);         
            echo json_encode(array("message" => "Item creado correctamente."));
        } else{         
            http_response_code(503);        
            echo json_encode(array("message" => "No se pudo crear el item."));
        }
    }

    public function editCompany($id,$data){
        $data['id_company'] = $id;
        if($this->model->editCompany($data)){         
            http_response_code(201);         
            echo json_encode(array("message" => "Item editado correctamente."));
        } else{         
            http_response_code(503);        
            echo json_encode(array("message" => "No se pudo editar el item."));
        }
    }

    public function deleteCompany($id){
        if($this->model->deleteCompany($id)){         
            http_response_code(201);         
            echo json_encode(array("message" => "Item eliminado correctamente."));
        } else{         
            http_response_code(503);        
            echo json_encode(array("message" => "No se pudo eliminar el item."));
        }
    }

    public function getAllCompanies(){
        $data = $this->model->getAll(); 
        if($data){         
            http_response_code(201);         
            echo json_encode($data);
        } else{         
            http_response_code(503);        
            echo json_encode(array("message" => "No se pudo eliminar el item."));
        }
    }

}