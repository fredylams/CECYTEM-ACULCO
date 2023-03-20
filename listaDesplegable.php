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
        <h3>💡-Cecytem-💡</h3>
        <label>Nombre</label>
        <input type="text" value="" size="20" name="txtNombre">
        <br><br>
        <label>Matricula</label>
        <input type="text" value="" size="20" name="txtMatricula">
        <br><br>
        <label>Carrera</label>
        <select name="selectCarrera" size="1">
            <option value="null">-Selecciona-</option>
            <option value="Programacion">Programacion</option>
            <option value="Alimentos">Alimentos</option>
        </select>
        <br><br>
        <label>Edad</label>
        <input type="text" value="" size="20" name="txtedad">
        <button type="reset">CANCELAR </button>
        <BUtton type="submit">ENVIAR</BUtton>
    </form>

    <?php
        if(isset($_POST['txtNombre']) && isset($_POST['txtMatricula']) && isset($_POST['selectCarrera']) && isset($_POST['txtedad'])){
            $nombre = $_POST['txtNombre'];
            $matricula = $_POST['txtMatricula'];
            $carrera = $_POST['selectCarrera'];
            $edad = $_REQUEST['txtedad'];

            if($carrera =="Programacion"){
                echo "Tu nombre es $nombre  la carrera que cursas es $carrera tu matricula es $matricula tu edad es $edad";
                echo "los de programcion sabemos que todo es papita";
            }elseif($carrera =="Alimentos"){
                echo "Tu nombre es $nombre  la carrera que cursas es $carrera tu matricula es $matricula tu edad es $edad";
                echo "los de Alimentos sabemos que las carnitas son muy ricas";
            }
        }
    ?>
</body>

</html>
