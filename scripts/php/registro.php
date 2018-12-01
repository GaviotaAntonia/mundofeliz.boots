<?php
    require('abrir_conexion.php'); // Se agrega un objeto que manda a llamar ese script, y no seguira corriendo hasta que este ese script.
    //validar que si tenga algo esa variable.
    $nombres =!empty($_REQUEST['username'])?$_REQUEST['username']:'';
    $correo =!empty($_REQUEST['email'])?$_REQUEST['email']:'';
    $edad =!empty($_REQUEST['edad'])?$_REQUEST['edad']:'';
    $cod =!empty($_REQUEST['codigo'])?$_REQUEST['codigo']:'';
    $appat =!empty($_REQUEST['apepat'])?$_REQUEST['apepat']:'';
    $apmat =!empty($_REQUEST['apemat'])?$_REQUEST['apemat']:'';
    $contra =!empty($_REQUEST['pass'])?$_REQUEST['pass']:'';
    $dele =!empty($_REQUEST['dele'])?$_REQUEST['dele']:'';
    $tel =!empty($_REQUEST['telefono'])?$_REQUEST['telefono']:'';

    insertarUsuarios($nombres,$correo,$contra,$edad,$cod,$appat,$apmat,$dele,$tel);
    function insertarUsuarios($nombres,$correo,$contra,$edad,$cod,$appat,$apmat,$dele,$tel){
        include('abrir_conexion.php');
        $insertar_Usuarios = "INSERT INTO $tusua
        (id_usuario,usuarionom,usuarioape,usuariomat,edad,telefono,delegacion,codigopostal,correo,contrasenna) VALUES (0,
            '$nombres','$appat','$apmat','$edad','$tel','$dele','$cod','$correo','$contra')";
        if ($conexion->query($insertar_Usuarios)){
            echo 'bien';
        }else{
            echo 'malRegistroEnlaBD';
        }
    }
?>