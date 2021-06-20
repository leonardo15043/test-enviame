<?php
require_once '../controller/company.php';
$company = new CompanyController();

if(isset($_GET['action']) && $_GET['action'] == "save"){
    $company->editCompany($_POST);
}
if(isset($_GET['id_company'])){
    $data = $company->getCompany($_GET['id_company']);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Editar Empresa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    <div class="container mt-5">
        <h1>Editar Empresa</h1>
        <form action="?action=save&id_company=<?php echo $_GET['id_company']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nombres</label>
            <input type="hidden" class="form-control" id="id_company" name="id_company" value="<?php echo $data->id_company; ?>">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $data->name; ?>">
        </div>
        <div class="form-group">
            <label for="name">Nit</label>
            <input type="text" class="form-control" id="nit" name="nit" value="<?php echo $data->nit; ?>">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $data->email; ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </form>
    </div>
</body>

</html>