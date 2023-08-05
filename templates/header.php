<?php

  $carousel = selectSQL("SELECT * FROM carousel");

  $redes_sociais = selectSQL("SELECT * FROM redes");

  $contactos = selectSQL("SELECT * FROM contactos");

  $livros = selectSQL("SELECT * FROM livros");

  $home = selectSQL("SELECT * FROM home");

  $perfil = selectSQL("SELECT * FROM autor");

  $destaque = selectSQL("SELECT * FROM destaques");

  $autor = selectSQL("SELECT * FROM autor");

  $i = 0;

?>



<!DOCTYPE html>
<html lang="pt">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="<?= $url_base; ?>public/style.css">
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script src="<?= $url_base ?>/public/main.js"></script>
      <title>Sebastião Alves - PF</title>
  </head>

  <body>
    <header class="container-fluid m-0 p-0">
      <div class="row z-0 m-0 w-100">
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-lg z-1 position-absolute w-100 mx-auto">
            <div class="container-fluid flex-wrap justify-content-center" id="menu">
              <a class="navbar-brand" href="index.html" id="titulo">Sebastião Alves</a>
              <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="mudarBotao()" id="mobileSVG">
                <img src="<?= $url_base ?>public/Imagens/SVG/menu.svg" alt="Menu" id="mobilebutton">
              </button>
              <hr class="m-auto" id="linha">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "" || $rotas[0] == "home") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base ?>autor">Autor</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown <?= ($rotas[0] == "livro") ? "active" : ""; ?>" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"  id="mobilebutton">Livros</a>
                    <ul class="dropdown-menu">
                      <?php foreach($livros as $l): ?>
                        <li><a class="dropdown-item <?= ($rotas[0] == "livro" && $rotas[1] == $l["id_livro"]) ? "active" : ""; ?>" href="<?= $url_base; ?>livro/<?= $l["id_livro"]; ?>"><?= $l["titulo"] ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base ?>imprensa">Imprensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base ?>contactos">Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators align-self-start justify-content-start gap-3">
              <?php foreach($carousel as $c): ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class="<?= ($c['id_carousel']==1) ? "active" : ""; ?>" aria-current="<?= ($i==1) ? "true" : ""; ?>" aria-label="Slide <?= $i; ?>"></button>
                <?php $i++; ?>
              <?php endforeach; ?>
            </div> 
            <div class="carousel-inner">
              <?php foreach($carousel as $c): ?>
                <div class="carousel-item <?= ($c['id_carousel']==1) ? "active" : ""; ?>">
                  <img src="<?= $c['imagem_desktop'] ?>" class="d-md-block d-none" alt="I<?= $c['id_carousel']; ?>">
                  <img src="<?= $c['imagem_mobile'] ?>" class="d-md-none" alt="IM<?= $c['id_carousel']; ?>">
                  <div class="carousel-caption d-md-block text-dark text-start" id="texto_carousel">
                    <h5>Novidade</h5>
                    <h3><?= $c['titulo']; ?></h3>
                    <p id="descricao"><?= $c['subtitulo']; ?></p>
                    <a href="<?= $c['link'] ?>">
                      <button id="saber_mais">Saber Mais</button>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>