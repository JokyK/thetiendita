<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    color: rgb(75, 75, 75);
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;



    background: linear-gradient(270deg, #5cecff, #e17cff, #ffeb7c);
    background-size: 600% 600%;

    -webkit-animation: AnimationName 8s ease infinite;
    -moz-animation: AnimationName 8s ease infinite;
    animation: AnimationName 8s ease infinite;
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #ffffff8f;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form {
    display: flex;
    flex-direction: column;
}

.img-container{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    margin-bottom: 8px;
    font-weight: bold;
}

input, select {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}

form p{
    text-align: center;
    margin-bottom: 10px;
}

form p a{
    color: #65a0c2;
    font-weight: bold;
}

form p a:hover{
    color: #568aa8;
    transition: ease .2s;
}

button {
    padding: 10px;
    background-color: #7fd1e6;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

button:hover {
    transition: ease .3s;
    background-color: #65a0c2;
}

img{
    width: 230px;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

    </style>

<?php
include('../conexdb.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $nombre = $_POST['nombre'];
    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_assoc($resultado);

    if($filas > 0){
        $contra = $filas["contra"];
        $tipo = $filas["tipo"];
        $ultimo_acceso = $filas["ultimo_acceso"];
    ?>
        <body>
        <div class="container">
        <form method="post" class="form">
            <label for="contra">Nombre</label>
            <input type="text" id="contra" name="contra" value="<?php echo $nombre ?>" readonly>

            <label for="contra">Contraseña</label>
            <input type="text" id="contra" name="contra" value="<?php echo $contra ?>" readonly>

            <label for="tipo">Tipo de Usuario</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $tipo ?>" readonly>

            <label for="acceso">Ultimo acceso</label>
            <input type="text" id="acceso" name="acceso" value="<?php echo $ultimo_acceso ?>" readonly>
            <a href="../escritorioTrabajo.html">Regresar</a>
            </form>
            </div>
        </body>
   <?php
    }else{
    echo "ERROR: DATOS INCORRECTOS";
    }

    mysqli_close( $conexion );
    }

?>