function voltarLogin(){
    document.getElementById("formLogin").style.display = "block";
    document.getElementById("formCadastro").style.display = "none";
    document.getElementById("erro").style.display = "none";
}

function entrarCadastro(){
    document.getElementById("formLogin").style.display = "none";
    document.getElementById("formCadastro").style.display = "block";
    document.getElementById("erro").style.display = "none";
}
