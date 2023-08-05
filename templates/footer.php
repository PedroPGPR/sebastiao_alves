<footer class="container-fluid z-0 mt-5">
      <div class="row m-3 d-none d-lg-block">
        <div class="col-12 d-flex justify-content-center flex-wrap" id="menu">
          <hr class="d-none d-lg-block" id="linha">
          <nav class="navbar navbar-expand-lg m-0 p-0">
            <div class="container-fluid flex-wrap justify-content-center p-0 mt-0" id="menu">
              <div class="collapse navbar-collapse bg-md-transparent w-100" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "" || $rotas[0] == "home") ? "active" : ""; ?>" aria-current="page" href="<?= $url_base ?>home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "autor") ? "active" : ""; ?>" href="<?= $url_base ?>autor">Autor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($rotas[0] == "livro") ? "active" : ""; ?>" href="#" onclick="aguarde()">Livros</a>
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
          <hr class="d-none d-lg-block" id="linha"> 
        </div>
      </div>
      <hr id="linha_mobile" class="d-block d-lg-none mx-auto">  
      <div class="row d-flex justify-content-center m-0 p-0"> 
        <div class="col-12 col-lg-10 p-0 d-block d-lg-flex flex-wrap justify-content-center align-items-center">
          <div class="col-lg-3 col-12 text-lg-start text-center p-2" id="tamanho">
            <h3 id="tbv-f" class="pb-2 m-0 align-lg-self-start">Contactos</h3>
            <h5 class="p-0 mb-1">Morada</h5>
            <p id="descr">
              <?= $contactos[0]['morada']; ?>
            </p>
          </div>
          <div class="col-lg-3 col-12 text-lg-start text-center p-2 pt-4 d-lg-flex align-lg-items-start justify-content-center flex-column" id="tamanho">
            <h5 class="p-0 mb-1">Telefone</h5>
            <p id="descr">
              <?= $contactos[0]['telefone']; ?>
            </p>
          </div>
          <div class="col-lg-3 col-12 text-lg-start text-center p-2 pt-4 d-lg-flex align-items-start justify-content-center flex-column" id="tamanho">
            <h5 class="p-0 mb-1">E-mail</h5>
            <p id="descr">
              <?= $contactos[0]['email']; ?>
            </p>
          </div>
          <div class="col-lg-3 col-12 text-lg-start text-center d-flex flex-wrap justify-content-center p-2">
            <p id="tbv-f" class="pb-2 m-0 text-lg-center text-center align-lg-self-start">Sigam-me nas redes Sociais</p>
            <div class="col-3">
              <a href=" <?= $redes_sociais[0]['instagram']; ?> ">
                <img src="<?= $url_base; ?>public/Imagens/SVG/instagram1.svg" alt="Instagram" id="filtro" class="me-lg-1">
              </a>
            </div>
            <div class="col-3">
              <a href="<?= $redes_sociais[0]['facebook']; ?>">
                <img src="<?= $url_base; ?>public/Imagens/SVG/facebook1.svg" alt="Facebook" id="filtro" class="me-lg-1">
              </a>
            </div>
            <div class="col-3">
              <a href="<?= $redes_sociais[0]['linkedin']; ?>">
                <img src="<?= $url_base; ?>public/Imagens/SVG/linkedin1.svg" alt="LinkDin" id="filtro" class="me-lg-1">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-11 col-12 d-lg-flex flex-wrap justify-content-between m-4 p-0">
          <div class="col-lg-6 col-9 d-flex justify-content-start gap-5 mt-lg-0 mt-3" id="lr">
            <img src="<?= $url_base; ?>public/Imagens/SVG/livroreclamacoes.svg" alt="Livro de Reclamações" id="reclamacoes">
            <img src="<?= $url_base; ?>public/Imagens/SVG/ralc.svg" alt="RALC" id="ralc">
          </div>
          <div class="col-lg-4 col-8 mt-lg-0 mt-5 mx-lg-0 mx-auto text-center">
            <p id="descr">
              Politica de Cookies
              <br>
              Copyright © 2023 Grupo MediaMaster. Todos os Direitos Reservados
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?= $url_base ?>/public/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>