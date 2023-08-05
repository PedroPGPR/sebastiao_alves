<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <h5>Telefone</h5>
            <p>
                <?= $contactos[0]['telefone']; ?>
            </p>
            <hr>
            <h5>Morada</h5>
            <p>
                <?= $contactos[0]['morada']; ?>
            </p>
            <hr>
            <h5>E-mail</h5>
            <p>
                <?= $contactos[0]['email']; ?>
            </p>
            <hr>
            <h5>Horário</h5>
            <p>
                <?= $contactos[0]['horario']; ?>
            </p>
            <hr>
            <a href="contactos/editar"><button class="m-2">Editar</button></a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Contactos</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $contactos[0]['id_contacto']; ?>">       
                <input type="text" name="telefone" placeholder="Telefone/Telemóvel" value="<?= $contactos[0]['telefone']; ?>" required> <br><br>
                <input type="text" name="morada" placeholder="Morada" value="<?= $contactos[0]['morada']; ?>" required> <br><br>
                <input type="text" name="email" placeholder="E-Mail" value="<?= $contactos[0]['email']; ?>" required> <br><br>
                <input type="text" name="horario" placeholder="Horário" value="<?= $contactos[0]['horario']; ?>" required> <br><br>
                <input type="submit" value="Editar"><br><br>
            </form>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Contactos Editados com sucesso</h1>
            <a href="<?= $url_base ?>contactos">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>