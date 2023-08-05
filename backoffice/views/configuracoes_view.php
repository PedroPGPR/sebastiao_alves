<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <h3>Alterar Senha</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $_SESSION['colaborador']['id_colaborador']; ?>">       
                <input type="password" name="senha_antiga" placeholder="Senha Atual" required> <br><br>
                <input type="password" name="nova_senha" placeholder="Nova Senha" required> <br><br>
                <input type="password" name="conf_nova_senha" placeholder="Confirmação Nova senha" required> <br><br>
                <input type="submit" value="Alterar Senha"><br><br>
            </form>
            <p class="text-danger d-<?= ($mensagem) ? "block" : "none" ?>">PassWord Atual, ou Confirmação das Passwords está Incorreta</p>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h1>Senha Editada com sucesso</h1>
            <a href="<?= $url_base ?>configuracoes">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>