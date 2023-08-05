<?php

    //Importacoes
    require_once("../backoffice/required.php");

    //Rotas
    $rotas = $_SERVER["REQUEST_URI"];
    $rotas = str_replace("/sebastiao_alves/backoffice/", "", $rotas);
    $rotas = explode("/", $rotas);

    if(str_contains($rotas[count($rotas)-1], "?")){
        $parametros = str_replace("?", "", $rotas[count($rotas)-1]);
        $parametros = explode("&", $parametros);
        $_GET = [];
        foreach($parametros as $p){
            $p = explode("=", $p);
            $_GET[$p[0]] = $p[1];
        }
        //var_dump($_GET);
        $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0];
    }

    $form = isset($_POST["usuario"]) && isset($_POST["senha"]);    
    $block = false;

    if($form){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        if(fazerLogin($usuario, $senha)){
            header("Location: welcome");
        }
        else{
            $block = true;
        }
    }

    switch($rotas[0]){
        
        case "":
            require_once("../backoffice/index.php");
            break;
        case "index":
            require_once("../backoffice/index.php");
            break;
        case "welcome":
            require_once("../backoffice/models/welcome_model.php");
            break;
        case "home":
            require_once("../backoffice/models/home_model.php");
            break;
        case "carousel":
            require_once("../backoffice/models/carousel_model.php");
            break; 
        case "autor":
            require_once("../backoffice/models/autor_model.php");
            break;
        case "destaques":
            require_once("../backoffice/models/destaques_model.php");
            break;
        case "livros":
            require_once("../backoffice/models/livros_model.php");
            break;
        case "imprensa":
            require_once("../backoffice/models/imprensa_model.php");
            break;
        case "contactos":
            require_once("../backoffice/models/contactos_model.php");
            break;
        case "redes":
            require_once("../backoffice/models/redes_model.php");
            break;
        case "configuracoes":
            require_once("../backoffice/models/configuracoes_model.php");
            break;
        case "logoff":
            require_once("../backoffice/models/sair_model.php");
            break;
        default:
            require_once("../backoffice/models/404_model.php");
            break;
    }
    
?>


<?php if(empty($rotas[0]) || $rotas[0]=="index"): ?>
    <!DOCTYPE html>
    <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="<?= $url_base ?>public/style.css">
            <title>Papelaria</title>
        </head>

        <body class="d-flex flex-column justify-content-center align-items-center gap-5">
            <header>
                <div class="mt-3 p-3" id="index_header">
                    <h1>BackOffice de Sebastiao Alvess</h1>
                </div>
            </header>
            <main>
                <div class="p-5" id="index_main">
                    <h3 class="mb-3">Login</h3>
                    <p class="text-danger d-<?= ($block) ? "block" : "none"; ?>">Login Inválido, tente novamente</p>
                    <form action="" method="POST">
                        <input type="text" name="usuario" placeholder="Nome" required>
                        <br><br>
                        <input type="password" name="senha" placeholder="Senha" required>
                        <br><br>
                        <input type="submit" value="Entrar">
                    </form>
                </div>
            </main>

            <footer>
                Pedro Rodrigues © 2023
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </body>


    </html>
<?php endif; ?>