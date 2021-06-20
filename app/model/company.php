<?php
require_once '../db.php';

class Company{

    private $pdo;

    public function __CONSTRUCT()
	{
		$this->pdo = Database::connection();     
	}

	public function getAll(){
		$stm = $this->pdo->prepare("SELECT * FROM company ");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
    }	

    public function addCompany($company){
        $result = array($company['name'],$company['nit'],$company['email']);
		$stm = $this->pdo->prepare("INSERT INTO company (name,nit,email) VALUES (?, ?, ?)");	
	    if($stm->execute($result)){
            return true;
        };
    }

    public function deleteCompany($id){
        $stm = $this->pdo->prepare("DELETE FROM company WHERE id_company = ?");			          
        if($stm->execute(array($id))){
            return true;
        };
    }

    public function getCompany($id){	
		$stm = $this->pdo->prepare("SELECT * FROM company WHERE id_company = ? ");	
		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);		
    }

    public function editCompany($company){
        $result = array($company['name'],$company['nit'],$company['email'],$company['id_company']);
		$stm = $this->pdo->prepare("UPDATE  company SET name = ?,nit = ?,email = ? WHERE id_company = ?");	
	    if($stm->execute($result)){
            return true;
        };
    }
    

}
