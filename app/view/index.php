<?php
require_once '../controller/company.php';
$com = new companyController();

if(isset($_GET['id_delete'])){
    $users->delete($_GET['id_delete']);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Lista de Empresas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<div class="container mt-5">
    <h1>Lista de Empresas</h1>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Nit</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($com->getAllCompanies() as $company ){
        ?>
        <tr class="user-<?php echo $company->id_company; ?>">
            <th scope="row"><?php echo $company->id_company; ?></th>
            <td><?php echo $company->name; ?></td>
            <td><?php echo $company->nit; ?></td>
            <td><?php echo $company->email; ?></td>
        </tr>
        <?php
            }
        ?>
        
    </tbody>
    </table>
</div>

</body>

</html>