<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <label>Codigo Estudiante</label>
        <input type="text" name="txtCodigo">
        <br><br>
        <label>DNI</label>
        <input type="text" name="txtDni">
        <br><br>
        <label>NOMBRES</label>
        <input type="text" name="txtnombres">
        <br><br>
        <label>Apellido</label>
        <input type="text" name="txtApellido">
        <br><br>
        <button type="reset">CANCELAR </button>
        <BUtton type="submit">ENVIAR</BUtton>
    </form>

    <?php
    include("conexion.php");
    $con = conectar();
    if (isset($_POST['txtCodigo'])) {
        $cod_estudiante = $_POST['txtCodigo'];
        $dni = $_POST['txtDni'];
        $nombres = $_POST['txtnombres'];
        $apellidos = $_POST['txtApellido'];


        $sql = "INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
        $query = mysqli_query($con, $sql);

        if ($query) {
            Header("Location: index.php");
        } else {
        }
    }


    ?>
</body>

</html>
