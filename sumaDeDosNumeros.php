<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSA INTEGRACION</title>
</head>
<body>
    <H1>ESTA ES MI PRIMERA PRACTICA</H1>
    <H2>SUMA DE 2 NUMEROS</H2>
    <form action="#" method="post">
        <label >Numero 1</label>
        <input type="text" name="txtnum1">
        <br><br>
        <label >Numero 2</label>
        <input type="text" name="txtnum2">
        <br><br>
        <label >Numero 3</label>
        <input type="text" name="txtnum3">
        <br><br>
        <label >Numero 4</label>
        <input type="text" name="txtnum4">
        <br><br>
        <label >Numero 5</label>
        <input type="text" name="txtnum5">
        <br><br>
        <button type="reset">CANCELAR </button>
        <BUtton type="submit">ENVIAR</BUtton>
    </form>
    <?php
   
    if(isset($_POST['txtnum1']) && isset($_POST['txtnum2']) && isset($_POST['txtnum3'])&& isset($_POST['txtnum4'])&& isset($_POST['txtnum5']) ){
        $n1 = $_POST['txtnum1'];
        $n2 = $_POST['txtnum2'];
        $n3 = $_POST['txtnum3'];
        $n4 = $_POST['txtnum4'];
        $n4 = $_POST['txtnum5'];
        $suma=$n1+$n2+$n3+$n4+$n5;
        echo "la suma de $n1 + $n2 +$n3 + $n4 + $n5 es igual a $suma";
    }else{
        echo "Es mi primera vez";
    }

    
    ?>


</body>
</html>
