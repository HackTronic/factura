<?php

$servername = "ns1.dns-parking.com";

$username = "u670308002_alava_idrovo";

$password = "sergioA22689";

$dbname = "u670308002_proyecto";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
    echo "Error de base";
}



// Get form data

$nombre = $_POST['inputNombre'];
$precio = $_POST['inputPrecio'];
$descripcion = $_POST['inputDescripcion'];
//$fk_id_establecimiento = $_POST['email'];
$lugar_establecimiento = $_POST['lugar'];
$fecha = $_POST['inputFecha'];
//$fk_id_categoria = $_POST['email'];
//$estado = $_POST['email'];


// Insert data into database

$sql = "INSERT INTO factura (nombre, precio, descripcion, fk_id_establecimiento, lugar_establecimiento, fecha, fk_id_categoria, estado) VALUES ('$nombre', '$precio', '$descripcion', 1, '$lugar_establecimiento', '$fecha', 1, 1)";


if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}


// Close connection

//$conn->close();
?>