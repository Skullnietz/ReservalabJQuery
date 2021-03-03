<?php

  if(isset($_GET['usu'])){
    $usu=$_GET['usu'];
  }

  if(isset($_GET['cont'])){
    $cont=$_GET['cont'];
  }

  /*include "Usuarios.blade.php";
  $usuario=new usuarios();
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $usuario->idUsuario=$id;
    $res=$usuario->consultar_usuario();
    $fila=mysqli_fetch_array($res);
  }
  */

?>
<!doctype html>
<html lang="en">
  <head><meta charset="euc-jp">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>ReservaLab</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="png" href="Imagenes/logo.png" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      body{

        background-size:cover;
        background-repeat: no-repeat ;
        background-attachment: fixed;

    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body background="images/back1.jpeg">
    <nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-0 shadow">
    <a class="navbar-brand nav-link col-md-3 col-lg-2 mr-0 px-3" href="Inicio.php"  style="color: azure;"><img src="Imagenes/logo.png" style="height: 20px;">ReservaLab</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-----
    <input class="form-control form-control-info w-100" type="text" placeholder="" aria-label="Search" readonly>--->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <?php
        if(isset($_GET['id'])){
          $nombre=$fila['Nombre'];
          echo "
          <a class='nav-link' href='Seguimiento.php?id=$id&usu=0' style='color:azure'>$nombre</a>
          ";
        }else{
          echo "
          <a class='nav-link' href='Acceso.php' style='color:azure'>Ingresar</a>
          ";
        }
      ?>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active"  href="Inicio.php">
              <span data-feather="home"></span>
              Inicio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <?php
              if(isset($_GET['usu'])){
                if($usu==1){
                  echo"<a class='nav-link' href='Seguimiento_medico.php?id=$id&usu=1'>
                  <span data-feather='users'></span>
                  Seguimiento
                  </a>";
                }else{
                  echo"<a class='nav-link' href='Seguimiento.php?id=$id&usu=0'>
                  <span data-feather='users'></span>
                  Seguimiento
                  </a>";
                }
              }else{
                echo"<a class='nav-link active' href='Acceso.php'>
                <span data-feather='user'></span>
                Ingresar
                </a>";
              }
            ?>
          </li>

          <li class="nav-item">
            <a class='nav-link active' href='Tabla_usuarios.php'>
                <span data-feather='users'></span>
                Tabla de usuarios
                </a>
          </li>

          <li class="nav-item">
          <?php
              if(isset($_GET['usu'])){
                if($usu==0){
                  echo"<a class='nav-link' href='Agendar_cita.php?id=$id&usu=0'>
                  <span data-feather='file'></span>
                  Agendar cita
                  </a>";
                }else{
                  echo"";
                }
              }
          ?>
          </li>
          <li class="nav-item">
          <a class="nav-link active" data-toggle="collapse" href="#lista_estudios">
              <span data-feather="layers"></span>
                Lista de estudios
              </a>
              <ul class="collapse" id="lista_estudios">
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="Todos.php">Todos los estudios</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="Pfemenina.php">Pruebas femeninas</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="Pmasculina.php">Pruebas masculinas</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="Mnuclear.php">Medicina nuclear</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="laboratorio.php">Laboratorio</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="CheckUp.php">Check Up</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="radiologia.php">Radiologia</a>
                  </li>
                  <li class="nav-item">
                      <span data-feather="aperture"></span>
                         <a href="resonancia.php">Resonancia</a>
                  </li>
              </ul>
          </li>
        </ul>
    </nav>