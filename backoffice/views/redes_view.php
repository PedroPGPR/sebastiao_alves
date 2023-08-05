<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <h5>Facebook</h5>
            <p>
                <?= $redes[0]['facebook']; ?>
            </p>
            <hr>
            <h5>Instagram</h5>
            <p>
                <?= $redes[0]['instagram']; ?>
            </p>
            <hr>
            <h5>Linkedin</h5>
            <p>
                <?= $redes[0]['linkedin']; ?>
            </p>
            <hr>
            <a href="redes/editar"><button class="m-2">Editar</button></a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Redes</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $redes[0]['id_rede']; ?>">       
                <input type="text" name="facebook" placeholder="Telefone/Telemóvel" value="<?= $redes[0]['facebook']; ?>" required> <br><br>
                <input type="text" name="instagram" placeholder="Morada" value="<?= $redes[0]['instagram']; ?>" required> <br><br>
                <input type="text" name="linkedin" placeholder="E-Mail" value="<?= $redes[0]['linkedin']; ?>" required> <br><br>
                <input type="submit" value="Editar"><br><br>
            </form>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Redes Editadas com sucesso</h1>
            <a href="<?= $url_base ?>redes">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>