<main class="container-fluid">
    <?php $i=0; ?>
        <?php foreach($noticias as $n): ?>
            <div class="row p-5 <?= (($i++)%2==0) ? "shadow" : "" ?>">
                <div class="col-9 m-auto">
                    <h2 id="tbv-f"><?= $n['titulo']; ?></h2>
                    <hr id="imprensa">
                    <p class="text-end text-uppercase"><?= $n['dat']; ?></p>
                    <img src="<?= $n['imagem']; ?>" class="w-100 mt-4 mb-4" alt="Imprensa 1">
                    <p id="descricao"><?= $n['texto']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <div class="row p-5">
        <div class="col-1 d-flex justify-content-center mx-auto gap-5" id="guia">
            <div class="col-1 d-flex justify-content-center">
                <a href="<?= $url_base ?>imprensa/<?= ($pagina_atual <= 1) ? "1" : ($pagina_atual-1); ?>">
                    <img src="<?= $url_base; ?>public/Imagens/Imprensa/setaesquerda2.svg" alt="SetaEsquerda" id="seta">
                </a>
            </div>
            <?php for($i=1; $i <= $total_paginas; $i++): ?>
                <div class="col-1 text-center"><a href="<?= $url_base ?>imprensa/<?= $i ?>" id="<?= ($i == $pagina_atual) ? "paginacaoA" : "paginacao"; ?>" value="<?= $i; ?>"><?= $i ?></a></div>
            <?php endfor; ?>  
            <div class="col-1 text-center d-flex justify-content-center">
                <a href="<?= $url_base ?>imprensa/<?= ($pagina_atual < $total_paginas) ? ($pagina_atual+1) : ($pagina_atual); ?>">
                    <img src="<?= $url_base; ?>public/Imagens/Imprensa/setadireita2.svg" alt="SetaDireitaHover" id="seta">
                </a>
            </div>
        </div>
    </div>
</main>