<?php
echo 'hola';
$tx = mysqli_connect('localhost', 'root', '', 'persona');

insertar($tx);

function insertar($tx){
    $nombre = $_POST['nombre'];
    $placa = $_POST['placa'];
    $hora = $_POST['nombre'];

    $consul = "INSERT INTO persona(nombre, placa, hora) VALUES ('$cedula', '$placa', '$hora')";

    mysqli_query($tx, $consul);
    mysqli_close($tx);
}

?>