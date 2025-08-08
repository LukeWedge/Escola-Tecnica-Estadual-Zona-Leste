const anoAtual = new Date().getFullYear();
// Pega o ano atual do sistema, tipo 2025, e guarda na constante 'anoAtual'

let anoNascimentoInput = prompt("Em que ano você nasceu?");
// Exibe uma caixa de diálogo pedindo para o usuário digitar o ano que nasceu
// O valor digitado fica armazenado em 'anoNascimentoInput' como texto (string)

let anoNascimento = parseInt(anoNascimentoInput);
// Converte a resposta de texto para número inteiro, para poder fazer cálculos

if (isNaN(anoNascimento) || anoNascimento > anoAtual || anoNascimento < 1900) {
    // Verifica se:
    // - Não é número (isNaN)
    // - Ou se o ano digitado é maior que o ano atual (não faz sentido)
    // - Ou se o ano digitado é menor que 1900 (limite mínimo que você escolheu)

    alert("Por favor, insira um ano de nascimento válido (um número entre 1900 e " + anoAtual + ").");
    // Se alguma dessas condições for verdadeira, avisa o usuário que o ano é inválido
} else {
    // Caso o ano digitado seja válido...

    let idade = anoAtual - anoNascimento;
    // Calcula a idade subtraindo o ano de nascimento do ano atual

    document.writeln(`Você tem ${idade} anos.`);
    // Escreve na página o resultado formatado: "Você tem X anos."
}
