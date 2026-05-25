<!DOCTYPE html>
<html>
<head>

    <title>Lista de Libros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h1 class="mb-4">Lista de Libros</h1>

    <a href="http://localhost:8080/prac_codel/index.php/libros/nuevo"
       class="btn btn-primary mb-3">

       Nuevo Libro

    </a>

    <table class="table table-bordered table-hover">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>AUTOR</th>
                <th>ISBN</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>

        </thead>

        <tbody>

        <?php foreach($libros as $libro){ ?>

            <tr>

                <td><?php echo $libro->id; ?></td>

                <td><?php echo $libro->titulo; ?></td>

                <td><?php echo $libro->autor; ?></td>

                <td><?php echo $libro->isbn; ?></td>

                <td><?php echo $libro->estado_prestamo; ?></td>

                <td>

                    <a href="http://localhost:8080/prac_codel/index.php/libros/editar/<?php echo $libro->id; ?>"
                       class="btn btn-warning btn-sm">

                       Editar

                    </a>

                    <a href="http://localhost:8080/prac_codel/index.php/libros/eliminar/<?php echo $libro->id; ?>"
                       class="btn btn-danger btn-sm">

                       Eliminar

                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>