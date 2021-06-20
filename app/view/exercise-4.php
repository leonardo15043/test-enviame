<?php
require_once '../controller/deliverie.php';
$deliverie = new DeliverieController();

if(isset($_GET['action']) && $_GET['action'] == "save"){
    $deliverie->sendDeliverie($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 4: Consumo API Envíame para la creación de un envío</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>

<body>
    <div class="container mt-5 mb-5">
        <h1>Ejercicio 4: Consumo API Envíame para la creación de un envío</h1>
        <h2>Orden de envío</h2>
        <form action="?action=save" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="n_packages">Numero de paquetes</label>
            <input type="number" class="form-control" id="n_packages" name="n_packages" >
        </div>
        <div class="form-group">
            <label for="content_description">Descripcion</label>
            <textarea class="form-control" id="content_description" name="content_description"></textarea>
        </div>
        <div class="form-group">
            <label for="imported_id">Id de importacion</label>
            <input type="number" class="form-control" id="imported_id" name="imported_id">
        </div>
        <div class="form-group">
            <label for="order_price">Precio de la orden</label>
            <input type="text" class="form-control" id="order_price" name="order_price">
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="text" class="form-control" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label for="volume">Volumen</label>
            <input type="text" class="form-control" id="volume" name="volume">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
            <label for="warehouse_code">Codigo de almacen</label>
            <input type="number" class="form-control" id="warehouse_code" name="warehouse_code">
        </div>
        <h2>Datos de destino</h2>
        <div class="form-group">
            <label for="customer_name">Nombre</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name">
        </div>
        <div class="form-group">
            <label for="customer_email">Email</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email">
        </div>
        <div class="form-group">
            <label for="customer_phone">Telefono</label>
            <input type="number" class="form-control" id="customer_phone" name="customer_phone">
        </div>
        <div class="form-group">
            <label for="customer_place">Lugar</label>
            <input type="text" class="form-control" id="customer_place" name="customer_place">
        </div>
        <div class="form-group">
            <label for="full_address">Direccion</label>
            <input type="text" class="form-control" id="full_address" name="full_address">
        </div>
        <h2>Transportadora</h2>
        <div class="form-group">
            <label for="carrier_code">Codigo</label>
            <input type="text" class="form-control" id="carrier_code" name="carrier_code">
        </div>
        <div class="form-group">
            <label for="tracking_number">Numero de rastreo</label>
            <input type="text" class="form-control" id="tracking_number" name="tracking_number">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Enviar</button>
        </form>
    </div>
</body>

</html>