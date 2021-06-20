<?php
require_once 'company.php';
require_once '../vendor/fzaninotto/faker/src/autoload.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$api = new CompanyApiController();

switch ($_GET['action']) {
    case 'get':
        $api->getAllCompanies();
        break;
    case 'add':
        $json = json_decode(file_get_contents("php://input"));
        $array = (array) $json;
        if(count($_POST) != 0){
            $array = $_POST;
        }
        $api->addCompany($array);
        break;
    case 'edit':
        $id = $_GET['id'];   
        $json = json_decode(file_get_contents("php://input"));
        $array = (array) $json;
        if(count($_POST) != 0){
            $array = $_POST;
        }
        $api->editCompany($id,$array);
        break;
    case 'delete':
        $id = $_GET['id'];
        $api->deleteCompany($id);
        break;
    case 'fake':
        $number = $_GET['id'];
        for ($i=0; $i < $number; $i++) { 
            $api->fakeData();
        }       
        break;

    default:
        $api->getAllCompanies();
        break;
}