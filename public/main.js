document.getElementById("perfil").scrollIntoView();  

function mudarBotao(){
    let src = document.getElementById("mobilebutton").getAttribute("src");
    if(src == "https://localhost/sebastiao_alves/public/Imagens/SVG/menu.svg"){
        document.getElementById("mobilebutton").src = "https://localhost/sebastiao_alves/public/Imagens/SVG/fechar.svg"
    }else{
        document.getElementById("mobilebutton").src = "https://localhost/sebastiao_alves/public/Imagens/SVG/menu.svg";
    }
}

function aguarde(){
    setTimeout(abrirSubMenu, 1000);
}

function abrirSubMenu(){
    $("#mobilebutton").dropdown("toggle");
}