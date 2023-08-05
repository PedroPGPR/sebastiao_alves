<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= $url_base; ?>public/style.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
        <title>Papelaria</title>
    </head>

    <body class="d-flex flex-column justify-content-center align-items-center gap-5">
        <header>
            <div class="mt-3 p-3">
                <h1 class="m-5">Sistema de BackOffice 2023</h1>
                <nav class="navbar navbar-expand-lg" id="navbar">
                    <div class="container-fluid">
                        <div class="row" id="nav">
                            <div class="col-12" id="nav">
                                <ul class="navbar-nav text-center d-flex flex-wrap flex-row justify-content-center gap-3">
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "welcome") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base; ?>welcome" id="tl">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "carousel") ? "active" : ""; ?>" href="<?= $url_base; ?>carousel" id="tl">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "home") ? "active" : ""; ?>" href="<?= $url_base; ?>home" id="tl">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base; ?>autor" id="tl">Autor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "livros") ? "active" : ""; ?>" href="<?= $url_base; ?>livros" id="tl">Livros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "destaques") ? "active" : ""; ?>" href="<?= $url_base; ?>destaques" id="tl">Destaques</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "imprensa") ? "active" : ""; ?>" href="<?= $url_base; ?>imprensa" id="tl">Imprensa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "contactos") ? "active" : ""; ?>" href="<?= $url_base; ?>contactos" id="tl">Contactos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "redes") ? "active" : ""; ?>" href="<?= $url_base; ?>redes" id="tl">Redes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "configuracoes") ? "active" : ""; ?>" href="<?= $url_base; ?>configuracoes" id="tl">Configurações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($rotas[0] == "sair") ? "active" : ""; ?>" href="<?= $url_base; ?>logoff" id="tl">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>