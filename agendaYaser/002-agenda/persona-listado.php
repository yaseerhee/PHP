<?php

require_once "_varios.php";
$sql = "
           SELECT
                p.id     AS p_id,
                p.nombre AS p_nombre,
                p.apellidos AS p_apellido,
                p.estrella AS p_estrella,
                c.id     AS c_id,
                c.nombre AS c_nombre
            FROM
               persona AS p INNER JOIN categoria AS c
               ON p.categoria_id = c.id
            ORDER BY p.nombre
    ";
$pdo = obtenerPdoConexionBD();
$select = $pdo->prepare($sql);
$select->execute([]);
$personas = $select->fetchAll();
?>


<html>

<head>
    <meta charset="UTF-8">
</head>


<body>
    <div>
        <h1>Listado de Personas</h1>

        <table>

            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Categoria</th>
                <th>Eliminar</th>
                <th>Favorito</th>
            </tr>

            <?php
            foreach ($personas as $filaUnica) { ?>
                <tr>
                    <td><a href="persona-ficha.php?id=<?= $filaUnica["p_id"] ?>"> <?= $filaUnica["p_nombre"] ?> </a></td>
                    <td><a href="persona-ficha.php?id=<?= $filaUnica["p_id"] ?>"> <?= $filaUnica["p_apellido"] ?> </a></td>
                    <td><a href="categoria-ficha.php?id=<?= $filaUnica["c_id"] ?>"> <?= $filaUnica["c_nombre"] ?> </a></td>
                    <td><a href="persona-eliminar.php?id=<?= $filaUnica["p_id"] ?>"><img src="img_X.png" width="25px" height="25px"> </a></td>
                    <td><?php if ($filaUnica["p_estrella"] == 1) {
                            echo '<img src="estrella.png" width="25" height="25">';
                        } ?>


                        </a></td>
                </tr>
            <?php } ?>

        </table>

        <br />

        <a href="persona-ficha.php?id=-1">Añadir una persona</a>


        <a href="categoria-listado.php">Gestionar listado de Categorias</a>
    </div>
</body>

</html>