<!DOCTYPE html>
<html>
<head>
    <title>Editar Libro</title>
</head>
<body>

<h1>Editar Libro</h1>

<form method="post" action="http://localhost:8080/prac_codel/index.php/libros/actualizar">

    <input type="hidden" name="id" value="<?php echo $libro->id; ?>">

    <label>Titulo:</label>
    <br>
    <input type="text" name="titulo" value="<?php echo $libro->titulo; ?>">
    <br><br>

    <label>Autor:</label>
    <br>
    <input type="text" name="autor" value="<?php echo $libro->autor; ?>">
    <br><br>

    <label>ISBN:</label>
    <br>
    <input type="text" name="isbn" value="<?php echo $libro->isbn; ?>">
    <br><br>

    <label>Estado Prestamo:</label>
    <br>
    <input type="text" name="estado_prestamo" value="<?php echo $libro->estado_prestamo; ?>">
    <br><br>

    <button type="submit">
        Actualizar
    </button>

</form>

</body>
</html>