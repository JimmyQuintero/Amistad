<?php

require_once("conexion.php");

$conexion = connectDB();

$form_name = addslashes($_POST['username']);
$form_pass = addslashes($_POST['password']);
$form_ced = addslashes($_POST['cedula']);
$form_tel = addslashes($_POST['telefono']);
$form_dir = addslashes($_POST['direccion']);
$form_correo = addslashes($_POST['correo']);
$cifrado_pass = password_hash($from_pass, PASSWORD_DEFAULT, array('cost'=>15));
$date_usuario=date("Y-m-d H:i:s");
$from_date = addslashes($POST[$date_usuarrio]);

$buscarUsuario = "SELECT * FROM usuarios WHERE correo_usuario  = '$form_correo'";
$result = $conexion->query($buscarUsuario);

if ($result->num_rows > 0) {
    echo "<br>El usuario ya existe.<br>";
    echo "<a href='../index.php'>Por favor escoga otro Nombre</a>";
} else {
    $query = "INSERT INTO Usuarios (nombre_usuario, clave_usuario, correo_usuario, cedula_usuario, telefono_usuario, direccion_usuario, inicio_usuario)
           VALUES ('$form_name', '$cifrado_pass','$form_correo','$form_ced','$form_tel','$form_dir','$form_date')";

    if ($conexion->query($query) === TRUE) {
        echo "<h2>Usuario Creado Exitosamente!</h2>";
        echo "<h4>Bienvenido: " . $form_name . "</h4>";
        echo "<h5>Hacer Login: <a href='../index.php'>Login</a></h5>";
    } else {
        echo "Error al crear el usuario: " . $conexion->error ;
    }
}
