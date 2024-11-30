<?php
session_start();
            if (isset($_SESSION['user'])) {
                
            } else {
                header("Location: ../index.php");
                exit();
            }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #e0f7fa;
        border: 1px solid #b2dfdb;
    }
    table th, table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #b2dfdb;
    }
    table th {
        background-color: #00796b;
        color: white;
    }
    table tr:nth-child(even) {
        background-color: #e0f2f1;
    }
    table tr:hover {
        background-color: #b2dfdb;
        cursor: pointer;
    }
    .box {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
                <li><a href="../index.php" >Inicio</a></li>
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
            <h1>Mostrar articulos</h1>
            <?php
            include_once('conexion.php');
            $sql = "SELECT 
                        articulos.id, 
                        articulos.descripcion AS articulo, 
                        articulos.pu, 
                        articulos.cantidad, 
                        categorias.descripcion AS categoria,
                        articulos.imagen 
                    FROM articulos 
                    INNER JOIN categorias 
                    ON articulos.id_categoria = categorias.id";
            $ejecucion_sql = $conexion->query($sql);
            if ($ejecucion_sql->num_rows > 0) {
                echo '<table border="1">';
                echo '<tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Precio Unitario</th>
                        <th>Cantidad</th>
                        <th>Categoría</th>
                        <th>Imagen</th>
                    </tr>';
                while ($fila = $ejecucion_sql->fetch_assoc()) {
                    echo '<tr>
                            <td>' . htmlspecialchars($fila['id']) . '</td>
                            <td>' . htmlspecialchars($fila['articulo']) . '</td>
                            <td>' . htmlspecialchars($fila['pu']) . '</td>
                            <td>' . htmlspecialchars($fila['cantidad']) . '</td>
                            <td>' . htmlspecialchars($fila['categoria']) . '</td>
                            <td><img src="../img/' . htmlspecialchars($fila['imagen']) . '" alt="Imagen del artículo" width="100"></td>
                        </tr>';
                }
                echo '</table>';
            } else {
                echo 'No hay datos disponibles.';
            }
            
            ?>
            <hr>
        </div>
    </section>
    <footer>
        <p>ProyectoUTD php DJxs4n© 2024 DJXs4n</p>
    </footer>
</body>
</html>