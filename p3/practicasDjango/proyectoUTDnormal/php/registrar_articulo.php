<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Desactivar las noticias y mostrar los errores
    error_reporting(E_ALL ^ E_NOTICE);

    // 1.- Conectarse a la BD
    include_once("conexion.php");

    // 2.- Traer los datos del formulario
    $descripcion = $_POST['descripcion'];
    $puntuacion = $_POST['puntuacion'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

    // Procesar la imagen
    $imagenNombre = $_FILES['imagen']['name'];
    $imagenTmp = $_FILES['imagen']['tmp_name'];
    $imagenRuta = "../img/articulos/" . basename($imagenNombre);

    // Subir la imagen
    if (move_uploaded_file($imagenTmp, $imagenRuta)) {
        // Guardar la ruta de la imagen en la base de datos
        $sql = "INSERT INTO `articulos` (`descripcion`, `pu`, `cantidad`, `id_categoria`, `imagen`) 
                VALUES ('$descripcion', '$puntuacion', '$cantidad', '$categoria', '$imagenNombre')";
        
        // Ejecutar la consulta
        $ejecutar_sql = $conexion->query($sql);

        if ($ejecutar_sql) {
            echo "<script>alert('Artículo agregado correctamente con la imagen.');</script>";
        } else {
            echo "<script>alert('No fue posible agregar el artículo, verifique por favor.');</script>";
        }
    } else {
        echo "<script>alert('Error al subir la imagen. Verifique los permisos de la carpeta.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | PHP Proyecto UTD</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen PHP" title="PHP">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="mision.php">Mision</a></li>
            <li><a href="vision.php">Vision</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="registrar_articulo.php">Registrar articulos</a></li>
            <li><a href="mostrar_articulos.php">Articulos</a></li>
            <li><a href="mostrar_categorias.php">Categorias</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registrar artículo</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td><label for="descripcion">Descripción:</label></td>
                        <td><input type="text" name="descripcion" placeholder="Descripción" required></td>
                    </tr>
                    <tr>
                        <td><label for="puntuacion">Puntuación:</label></td>
                        <td><input type="number" name="puntuacion" required></td>
                    </tr>
                    <tr>
                        <td><label for="cantidad">Cantidad:</label></td>
                        <td><input type="number" name="cantidad" required></td>
                    </tr>
                    <tr>
                        <td><label for="categoria">Categoría:</label></td>
                        <td>
                            <select name="categoria" id="categoria">
                                <?php
                                include_once('conexion.php');
                                $sql = "SELECT * FROM categorias";
                                $ejecucion_sql = $conexion->query($sql);

                                while ($fila = $ejecucion_sql->fetch_assoc()) {
                                    echo '<option value="' . $fila['id'] . '">' . $fila['descripcion'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="imagen">Imagen:</label></td>
                        <td><input type="file" name="imagen" accept="image/*" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" value="Enviar"></td>
                        <td><input type="reset" name="limpiar" value="Limpiar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <footer>
        <p>ProyectoUTD php DJxs4n© 2024 DJXs4n</p>
    </footer>
</body>
</html>
