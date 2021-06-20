<?php
require_once '../db.php';

class Deliverie{

    private $pdo;

    public function __CONSTRUCT()
	{
		$this->pdo = Database::connection();     
	}

    public function addResponse($title,$description,$ref){
        $result = array($title,$description,$ref);
     
		$stm = $this->pdo->prepare("INSERT INTO deliverie (title,description,reference) VALUES (?, ?, ?)");	
	    if($stm->execute($result)){
            return true;
        };
    }
    

}
