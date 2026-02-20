var contadorAluno = 0;

function addLista(){
    // Auto increment contador de aluno
    contadorAluno ++;
    
    // Criando linha 
    let novoAluno = document.createElement("li")

    // Coletando dados od forumlário
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let rm = document.getElementById("rm").value;
    let telefone = document.getElementById("telefone").value;
    let turma = document.getElementById("turma").value;
    
    // Adicionando texto à linha
    novoAluno.innerHTML = `
        <b>Aluno ${contadorAluno}</b> <br>
        Nome: ${nome} <br> 
        E-mail: ${email} <br>
        RM: ${rm} <br>
        Tel: ${telefone} <br> 
        Turma: ${turma} <br>
        `;

    // Atribuindo ID
    novoAluno.setAttribute("id", contadorAluno);

    // Criando botão de remover
    let botaoRemover = document.createElement("button");
    botaoRemover.textContent = "Remover";
    botaoRemover.setAttribute("onclick", `delLista(${contadorAluno})`);

    novoAluno.appendChild(botaoRemover);
    document.getElementById("lista").appendChild(novoAluno);
}

function delLista(alunosLista){
    var alunos = document.getElementById(alunosLista);
    document.getElementById("lista").removeChild(alunos);
}