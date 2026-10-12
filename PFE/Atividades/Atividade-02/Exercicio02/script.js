function trocarFotoD() {
    document.getElementById("foto").setAttribute("src", "assets/imagemD.png");
}

function trocarFoto1() {
    document.getElementById("foto").setAttribute("src", "assets/imagem1.png");
}

function trocarFoto2() {
    document.getElementById("foto").setAttribute("src", "assets/imagem2.png");
}

function atributo() {
    console.log(document.getElementById("foto").getAttribute("src"));
}