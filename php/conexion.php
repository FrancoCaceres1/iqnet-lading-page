<?php
  $conexion = null;
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $baseDeDatos = "iqnet";

  try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$baseDeDatos, $usuario, $clave);
  } catch (PDOException $e){
    echo"Erro en la conexion con el servidor";
    exit;
  }
  return $conexion;
?>