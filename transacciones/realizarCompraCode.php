<?php
include("../conexdb.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["btnEjecutar"])){

$numFactura = $_POST["numFactura"];
$nrc = $_POST["nrc"];
$codigo = $_POST["codigo"];
$fecha = $_POST["fecha"];
$cantidad = $_POST["cantidad"];

$consulta = "INSERT INTO compras (num_factura, nrc_proveedor, cod_producto, fecha_compra, cantidad) VALUES ('$numFactura','$nrc', '$codigo', '$fecha', '$cantidad')";

$resultado = mysqli_query($conexion, $consulta);
if($resultado){
        $consultaAgregarProducto = "UPDATE productos set cantidad = cantidad + '$cantidad'";

    $resultadoAgregarProductos = mysqli_query($conexion, $consultaAgregarProducto);
    if($resultadoAgregarProductos){
        ?> <div style="width: 100%; color: white; background-color: green; " > Productos Actualizados Correctamente! </div> <?php
    }else{
        ?> <div style="width: 100%; color: white; background-color: red; " > Error al actualizar los productos! </div> <?php
    }

    ?> <div style="width: 100%; color: white; background-color: green; " > Compra Agregada Correctamente! </div> <?php
}else{
    ?> <div style="width: 100%; color: white; background-color: red; " > Error al agregar la compra! </div> <?php
}
}
}
?>