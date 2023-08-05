    <div class="row d-flex justify-content-end z-1" id="perfil">
        <div class="col-md-11 d-lg-flex justify-content-start flex-row shadow mb-0" id="cartao">
            <div class="col-lg-4 d-flex flex-wrap justify-content-center align-content-center me-5">
                <img src="<?= $home[0]['imagem']; ?>" alt="Foto Perfil" id="bem_vindo" class="shadow">
            </div>
            <div class="col-lg-7">
                <h3 class="pb-2 pt-2" id="tbv">Bem-Vindo ao meu Website</h3>
                <p id="descr">
                    <?= mb_strimwidth($perfil[0]['descricao'], 0, 1800, "..."); ?>
                </p>
                <br>
                <a href="autor" class="btn d-flex align-items-center flex-row justify-content-center float-center float-md-end mx-auto p-0" id="saber_mais">Saber Mais</a>
            </div>
        </div>
    </div>
</header>