<?php
require_once '../controller/company.php';
$company = new CompanyController();
if(isset($_GET['action']) && $_GET['action'] == "save"){
    $company->addCompany($_POST);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Agregar Empresa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Agregar Empresa</h1>
        <form action="?action=save" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nombres</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="name">Nit</label>
            <input type="number" class="form-control" id="nit" name="nit" >
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    </div>
</body>

</html>