<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultados</title>
</head>
<body>
    <style type="text/css">
        body{
            background-image: url("btt.gif");
            background-size: cover;
            color: grey;
        }
    </style>
</body>
</html>

<?php
$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeF = $_FILES['userfile']['name'];

$comodo = $_POST['comodo'];

echo $comodo;

$pathRoot = "comodos/$comodo";

if (is_dir($pathRoot)) {

}else{
    mkdir($pathRoot);
}

$parInfo = pathinfo("$nomeF");

$ext = $parInfo['extension'];

$extp = array("jpg", "jpeg", "png");

if (in_array($ext,$extp)){
    $ctr = move_uploaded_file($nomeTemp,$pathRoot."/".$nomeF);

    if($ctr){
        echo"Upload Realizado!!!!";
    }else{
        echo"Upload não realizado";
    }
}
else{
    echo"Extensão não Permitida";
}
?>