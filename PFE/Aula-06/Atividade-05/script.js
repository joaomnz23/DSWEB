// FUNÇÃO QUE VALIDA NOME
function validarNome() {
    const nome = document.getElementById('nome').value;
    const feedbackNome = document.getElementById('erro-nome');

    let nomeRegex = /^[a-zA-ZÀ-ÿ ]{2,60}$/;

    if (nome === "") {
        feedbackNome.textContent = "Nome obrigatório.";
        return;
    }

    if (!nomeRegex.test(nome)) {
        feedbackNome.textContent = "Nome inválido. Use apenas letras (mín. 2, máx. 60 caracteres).";
        return;
    }

    feedbackNome.textContent = "Nome válido!";
    feedbackNome.style.color = "green";
}

// FUNÇÃO QUE VALIDA EMAIL
function validarInputEmail() {
    const email = document.getElementById('email').value;
    const feedbackEmail = document.getElementById('erro-email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailRegex.test(email)) {
        feedbackEmail.textContent = "E-mail válido";
        feedbackEmail.style.color = "green";
    } else {
        feedbackEmail.textContent = "Por favor insira um e-mail válido.";
    }
}

// FUNÇÃO QUE VALIDA SENHA
function validarSenha() {
    const senha = document.getElementById('senha').value;
    const senhaConfirm = document.getElementById('confirma-senha').value;
    const feedbackSenha = document.getElementById('erro-senha')

    let caracMai = /[A-Z]/;
    let caracMin = /[a-z]/;
    let caracNum = /[0-9]/;
    let caracEsp = /[^a-zA-Z0-9]/;

    if (senha === "" && senhaConfirm === "") {
        feedbackSenha.textContent = "";
        feedbackSenha.style.color = "red";
        return
    }

    if (senha.length < 8) {
        feedbackSenha.textContent = "Sua senha deve ter pelo menos 8 caracteres.";
        return;
    }

    if (!caracMai.test(senha)) {
        feedbackSenha.textContent = "Sua senha deve ter caracteres maiúsculos.";
        return;
    }

    if (!caracMin.test(senha)) {
        feedbackSenha.textContent = "Sua senha deve ter caracteres minúsculos.";
        return;
    }

    if (!caracNum.test(senha)) {
        feedbackSenha.textContent = "Sua senha deve ter números.";
        return;
    }

    if (!caracEsp.test(senha)) {
        feedbackSenha.textContent = "Sua senha deve ter caracteres especiais.";
        return;
    }

    if (senha != senhaConfirm && (senhaConfirm.length > 0)) {
        feedbackSenha.style.color = "red";
        feedbackSenha.textContent = "Tenha certeza de que digitou a mesma senha na entrada anterior.";
        return;
    }

    feedbackSenha.textContent = "Sua senha está forte";
    feedbackSenha.style.color = "green";
}

// FUNÇÃO QUE MASCARA CPF/CNPJ
function mascararCPFCNPJ() {
    const cpf = document.getElementById('cpf').value;

    let cpfLimpo = cpf.replace(/\D/g, "");

    if (cpfLimpo.length > 9) {
        document.getElementById('cpf').value =
            cpfLimpo.substring(0, 3) + "." +
            cpfLimpo.substring(3, 6) + "." +
            cpfLimpo.substring(6, 9) + "-" +
            cpfLimpo.substring(9, 11);
    } else if (cpfLimpo.length > 6) {
        document.getElementById('cpf').value =
            cpfLimpo.substring(0, 3) + "." +
            cpfLimpo.substring(3, 6) + "." +
            cpfLimpo.substring(6, 9);
    } else if (cpfLimpo.length > 3) {
        document.getElementById('cpf').value =
            cpfLimpo.substring(0, 3) + "." +
            cpfLimpo.substring(3, 6);
    }
}

// FUNÇÃO QUE VALIDA CPF/CNPJ
function validarCPFCNPJ() {
    const cpf = document.getElementById('cpf').value;
    const feedbackCPF = document.getElementById('erro-cpf');

    let numeros = cpf.replace(/\D/g, "");

    // 1º dígito verificador
    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += Number(numeros[i]) * (10 - i); // qual número vai no lugar de __?
    }
    let resto = soma % 11;
    let digito1 = resto < 2 ? 0 : 11 - resto;

    // 2º dígito verificador (pesos vão de 11 até 2)
    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += Number(numeros[i]) * (11 - i); // e aqui?
    }
    resto = soma % 11;
    let digito2 = resto < 2 ? 0 : 11 - resto;

    // comparação final
    if (digito1 !== Number(numeros[9]) || digito2 !== Number(numeros[10])) {
        feedbackCPF.textContent = "CPF inválido.";
        return;
    }

    feedbackCPF.textContent = "CPF válido!";
    feedbackCPF.style.color = "green";
}

// FUNÇÃO QUE MASCARA TELEFONE
function mascararTel() {
    const telefone = document.getElementById('telefone').value;

    let telefoneLimpo = telefone.replace(/\D/g, "");

    if (telefoneLimpo.length === 11) {
        document.getElementById('telefone').value =
            "(" +
            telefoneLimpo.substring(0, 2) + ") " +
            telefoneLimpo.substring(2, 7) + "-" +
            telefoneLimpo.substring(7, 11);
    } else if (telefoneLimpo.length === 10) {
        document.getElementById('telefone').value =
            "(" +
            telefoneLimpo.substring(0, 2) + ") " +
            telefoneLimpo.substring(2, 6) + "-" +
            telefoneLimpo.substring(6, 10);
    }
}

// FUNÇÃO QUE VALIDA TELEFONE
function validarTel() {
    const telefone = document.getElementById('telefone').value;
    const feedbackTel = document.getElementById('erro-telefone');

    let telefoneLimpo = telefone.replace(/\D/g, "");
    let DDD = Number(telefoneLimpo.substring(0, 2));

    if (telefoneLimpo.length !== 10 && telefoneLimpo.length !== 11) {
        feedbackTel.textContent = "Telefone inválido.";
        return;
    }

    if (DDD < 11 || DDD > 99) {
        feedbackTel.textContent = "DDD inválido.";
        return;
    }

    feedbackTel.textContent = "Telefone válido!";
    feedbackTel.style.color = "green";
}

// FUNÇÃO QUE MASCARA CEP
function mascararCEP() {
    const cep = document.getElementById('cep').value;

    let cepLimpo = cep.replace(/\D/g, "");

    if (cepLimpo.length > 5) {
        document.getElementById('cep').value =
            cepLimpo.substring(0, 5) + "-" + cepLimpo.substring(5, 8);
    }
}

// FUNÇÃO QUE VALIDA CEP
function validarCEP() {
    const cep = document.getElementById('cep').value;
    const feedbackCEP = document.getElementById('erro-cep');

    let cepLimpo = cep.replace(/\D/g, "");

    if (cepLimpo.length != 8) {
        feedbackCEP.textContent = "CEP inválido.";
        return;
    }

    feedbackCEP.textContent = "CEP válido.";
    feedbackCEP.style.color = "green";
}

function validarData() {
    const dataInput = document.getElementById('data-nascimento').value;
    const feedbackData = document.getElementById('erro-data-nascimento');
    
    if (dataInput === "") {
        // Verifica se o campo está vazio mas o usuário tentou digitar algo
        if (document.getElementById('data-nascimento').valueAsDate === null) {
            feedbackData.textContent = "Data inválida. Por favor, escolha uma data válida.";
        } else {
            feedbackData.textContent = "Data obrigatória.";
        }
        return;
    }
    
    let ano = Number(dataInput.substring(0, 4));    
    let mes = Number(dataInput.substring(5, 7));
    let dia = Number(dataInput.substring(8, 10));
    
    let data = new Date(ano, mes - 1, dia);
    
    if (data.getMonth() !== mes - 1) {
        feedbackData.textContent = "Data inválida.";
        return;
    }
    
    feedbackData.textContent = "Data válida!";
    feedbackData.style.color = "green";
}

// FUNÇÃO QUE VALIDA URL
function validarURL() {
    const url = document.getElementById('url').value;
    const feedbackURL = document.getElementById('erro-url');

    if (!url.startsWith("http://") && !url.startsWith("https://")) {
        feedbackURL.textContent = "URL deve começar com http:// ou https://";
        return;
    }

    feedbackURL.textContent = "URL válida!";
    feedbackURL.style.color = "green";
}

// FUNÇÃO QUE VALIDA VALOR
function validarValor() {
    const valor = document.getElementById('valor').value;
    const feedbackValor = document.getElementById('erro-valor');

    let valorRegex = /^\d{1,3}(\.\d{3})*(,\d{2})?$/;

    if (!valorRegex.test(valor)) {
        feedbackValor.textContent = "Formato inválido. Ex: 1.299,90";
        return;
    }

    feedbackValor.textContent = "Valor válido!";
    feedbackValor.style.color = "green";
}

// FUNÇÃO QUE MASCARA CARTÃO
function mascararCartao() {
    const cartao = document.getElementById('cartao').value;

    let cartaoLimpo = cartao.replace(/\D/g, "");

    if (cartaoLimpo.length > 12) {
        document.getElementById('cartao').value =
            cartaoLimpo.substring(0, 4) + " " +
            cartaoLimpo.substring(4, 8) + " " +
            cartaoLimpo.substring(8, 12) + " " +
            cartaoLimpo.substring(12, 16);
    } else if (cartaoLimpo.length > 8) {
        document.getElementById('cartao').value =
            cartaoLimpo.substring(0, 4) + " " +
            cartaoLimpo.substring(4, 8) + " " +
            cartaoLimpo.substring(8, 12);
    } else if (cartaoLimpo.length > 4) {
        document.getElementById('cartao').value =
            cartaoLimpo.substring(0, 4) + " " +
            cartaoLimpo.substring(4, 8);
    }
}

// FUNÇÃO QUE VALIDA CARTÃO
function validarCartao() {
    const cartao = document.getElementById('cartao').value;
    const feedbackCartao = document.getElementById('erro-cartao');

    let cartaoLimpo = cartao.replace(/\D/g, "");

    if (cartaoLimpo.length !== 16) {
        feedbackCartao.textContent = "Cartão deve ter 16 dígitos.";
        return;
    }

    let bandeira = "Desconhecida";

    // /^4/ É UM REGEX QUE VERIFICA SE A STRING COMEÇA COM O DÍGITO 4
    // ^ SIGNIFICA "COMEÇA COM"
    // .TEST VERIFICA SE ENCONTRA O PADRÃO NA VARÁIVEL
    if (/^4/.test(cartaoLimpo)) {
        bandeira = "Visa";
    } 
    
    // /^5[1-5]/ É UM REGEX QUE VERIFICA SE A STRING COMEÇA COM 5 SEGUIDO DE UM DIGITO ENTRE 1 E 5
    // [1-5] SIGNIFICA "QUALQUER NÚMERO ENTRE"
    else if (/^5[1-5]/.test(cartaoLimpo)) {
        bandeira = "Mastercard";
    } 
    
    // /^3[47]/ É UM REGEX QUE VERICICA SE A STRING COMEÇA COM 34 OU 37
    // [47] SIGNIFICA APENAS 4 OU 7
    else if (/^3[47]/.test(cartaoLimpo)) {
        bandeira = "Amex";
    }

    feedbackCartao.textContent = `Cartão válido! Bandeira: ${bandeira}`;
    feedbackCartao.style.color = "green";
}

// FUNÇÃO DE ENVIO
function enviarFormulario(event) {

    // CANCELA OCOMPORTAMENTO PADRÃO DO BOTÃO DE ENVIAR (RESETAR)
    event.preventDefault();


    const resultado = document.getElementById('resultado');

    // SALVA TODOS OS CONTEUTOS DOS SPANS NUMA ARRAY
    const erros = [
        document.getElementById('erro-nome').textContent,
        document.getElementById('erro-email').textContent,
        document.getElementById('erro-senha').textContent,
        document.getElementById('erro-cpf').textContent,
        document.getElementById('erro-telefone').textContent,
        document.getElementById('erro-cep').textContent,
        document.getElementById('erro-data-nascimento').textContent,
        document.getElementById('erro-valor').textContent,
        document.getElementById('erro-url').textContent,
        document.getElementById('erro-cartao').textContent,
    ];

    //.ERROS É UM MÉTODO DE ARRAY QUE VERIFICA SE **PELO MENOS UM** ELEMENTO DA ARRAY SATISFAZ UMA CONDIÇÃO
    if (erros.some(e => e !== "" && !e.includes("válid") && !e.includes("forte") && !e.includes("sucesso"))) {

        // SE NENHUMA DAS CONDIÇÕES FOR VERDADEIRA, EXIBE MENSAGEM DE ERRO
        resultado.textContent = "Corrija os erros antes de enviar.";
        resultado.style.color = "red";
        return;
    }

    // SE NÃO PASSAR PELO **IF** CAI DIRETO NO TEXTO VALIDADO EXIBINDO TODAS AS INFORMAÇÕES INSERIDAS
    resultado.style.color = "green";
    resultado.innerHTML =
        "<strong>Formulário enviado com sucesso!</strong><br><br>" +
        "Nome: "             + document.getElementById('nome').value            + "<br>" +
        "E-mail: "           + document.getElementById('email').value           + "<br>" +
        "CPF: "              + document.getElementById('cpf').value             + "<br>" +
        "Telefone: "         + document.getElementById('telefone').value        + "<br>" +
        "CEP: "              + document.getElementById('cep').value             + "<br>" +
        "Data Nascimento: "  + document.getElementById('data-nascimento').value + "<br>" +
        "Valor: "            + document.getElementById('valor').value           + "<br>" +
        "URL: "              + document.getElementById('url').value             + "<br>" +
        "Cartão: "           + document.getElementById('cartao').value          + "<br>";
}