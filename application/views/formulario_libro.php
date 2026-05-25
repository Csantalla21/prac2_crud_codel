<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Libro</title>
</head>
<body>

<h1>Nuevo Libro</h1>

<form method="post" action="http://localhost:8080/prac_codel/index.php/libros/guardar">
    <label>id:</label>
    <br>
    <input type="int" name="id">
    <br><br>

    <label>Titulo:</label>
    <br>
    <input type="text" name="titulo">
    <br><br>

    <label>Autor:</label>
    <br>
    <input type="text" name="autor">
    <br><br>

    <label>ISBN:</label>
    <br>
    <input type="text" name="isbn">
    <br><br>

    <label>Estado Prestamo:</label>
    <br>
    <input type="text" name="estado_prestamo">
    <br><br>

    <button type="submit">
        Guardar Libro
    </button>

</form>

</body>
</html>