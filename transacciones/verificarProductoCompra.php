<link rel="stylesheet" href="stylesTransacciones.css">

<?php
include("../conexdb.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
$codigo_producto = $_POST["codigo"];

$consulta = "SELECT * FROM productos WHERE cod_producto = '$codigo_producto'";
$resultado = mysqli_query($conexion, $consulta);
if(mysqli_num_rows($resultado) > 0){
?>

<div class="container">
        <form method="post" class="form">
            <h2>Comprar Productos</h2>
            <?php
            include("realizarCompraCode.php");
            ?>
            <label for="numFactura">Igrese el número de factura</label>
            <input type="text" id="numFactura" name="numFactura" required>
            
            <label for="nrc">Igrese el NRC</label>
            <input type="text" id="nrc" name="nrc" required>

            <label for="codigo">Codigo del producto</label>
            <input type="text" id="codigo" name="codigo" value="<?php echo $codigo_producto?>" readonly required>
            
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha" required>
            

            <label for="cantidad">Igrese la cantidad</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <button name="btnEjecutar" type="submit">Comprar</button>
            <a href="frmCompras.php">Regresar</a>
        </form>
    </div>


<?php
}else{
header("location: ../productos/frmAgregarProducto.php");
}

}

?>