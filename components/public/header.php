<?php

session_start();

include_once('helpers/isActivePage.php');
include_once('helpers/database.php');
$connection = connectDatabase();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="src/css/main.css">
  <?php
  // Inclua as informações da página atual
  if (isset($pageInfo)) {
    echo "<title>{$pageInfo['title']}</title>";
    echo "<meta name='description' content='{$pageInfo['description']}'>";
  } else {
    echo "<title>Biblioteca Obras da Vida</title>";
    echo "<meta name='description' content='Bem-vindo ao Biblioteca Obras da Vida'>";
  }
  ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="src/img/logo.png" alt="Logo Biblioteca Obras da Vida" class="w-25">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= isActivePage($currentPage, 'index') ?>">
            <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?= isActivePage($currentPage, 'about') ?>">
            <a class="nav-link" href="about.php">
              Sobre
            </a>
          </li>
          <li class="nav-item <?= isActivePage($currentPage, 'contact') ?>">
            <a class="nav-link" href="contact.php">
              Contato
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">
                Romance
              </a>
              <a class="dropdown-item" href="#">
                Aventura
              </a>
              <a class="dropdown-item" href="#">
                Ficção
              </a>
              <a class="dropdown-item" href="#">
                Terror
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ver todas as categorias</a>
            </div>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <?php
            if (!isset($_SESSION['user_id'])) {
            ?>
          <a class="btn btn-outline-color1 my-2 my-sm-0" href="login.php">
            Login
          </a>
          <a class="btn btn-color1 my-2 my-sm-0 text-light ml-2" href="register.php">
            Cadastre-se
          </a>
          <?php } else { ?>
          <a class="btn btn-color1 my-2 my-sm-0 text-light ml-2" href="admin/index.php">
            Ir para o dashboard
          </a>
          <?php } ?>
          <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-search"></i>
          </button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <form action="" method="get">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Faça sua pesquisa
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" name="pesquisa" id="pesquisa" class="form-control w-100" placeholder="Ex: Harry Potter...">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="button" class="btn btn-color1">Buscar</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>