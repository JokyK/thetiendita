<?php
include("../conexdb.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["btnEjecutar"])){

$numFactura = $_POST["numFactura"];
$dui = $_POST["dui"];
$codigo = $_POST["codigo"];
$fecha = $_POST["fecha"];
$cantidad = $_POST["cantidad"];

$consulta = "INSERT INTO ventas (num_factura, dui, cod_producto, fecha_venta, cantidad) VALUES ('$numFactura','$dui', '$codigo', '$fecha', '$cantidad')";

$resultado = mysqli_query($conexion, $consulta);
if($resultado){
        $consultaRestarProducto = "UPDATE productos set cantidad = cantidad - '$cantidad'";

    $resultadoRestarProductos = mysqli_query($conexion, $consultaRestarProducto);
    if($resultadoRestarProductos){
        ?> <div style="width: 100%; color: white; background-color: green; text-align: center; padding: 3px; " > Productos Actualizados Correctamente! </div> <?php
    }else{
        ?> <div style="width: 100%; color: white; background-color: red; text-align: center; padding: 3px; " > Error al actualizar los productos! </div> <?php
    }

    ?> <div style="width: 100%; color: white; background-color: green; text-align: center; padding: 3px; " > Venta efectuada Correctamente! </div> <?php
}else{
    ?> <div style="width: 100%; color: white; background-color: red; text-align: center; padding: 3px; " > Error al efectuar la compra! </div> <?php
}
}
}
?>