<main class="container-fluid">
    <div class="row p-5">
        <div class="col-8 m-auto d-flex justify-content-around">
            <div class="col-3 text-center">
                <h5>Telefone</h5>
                <p id="descr">
                    <?= $contactos[0]['telefone']; ?>
                </p>
            </div>
            <div class="col-3 text-center">
                <h5>Morada</h5>
                <p id="descr">
                    <?= $contactos[0]['morada']; ?>
                </p>
            </div>
            <div class="col-3 text-center">
                <h5>E-mail</h5>
                <p id="descr">
                    <?= $contactos[0]['email']; ?>
                </p>
            </div>
        </div>
    </div>
    <hr id="p-contactos">
    <div class="row p-5">
        <div class="col-8 m-auto d-flex justify-content-center">
            <div class="col-4 text-center">
                <h5>Horário</h5>
                <p id="descr">
                    <?= $contactos[0]['horario']; ?>
                </p>
            </div>
        </div>
    </div>
</main>