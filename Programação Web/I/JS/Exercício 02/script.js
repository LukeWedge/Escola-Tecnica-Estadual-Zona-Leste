let numeroInput = prompt("Digite um número inteiro:");
// Exibe uma caixa de diálogo pedindo para o usuário digitar um número
// O valor digitado é armazenado como texto na variável 'numeroInput'

let numero = parseInt(numeroInput);
// Converte a string digitada em número inteiro para facilitar a checagem e cálculos

if (isNaN(numero)) {
    // Verifica se a conversão não resultou em um número válido (NaN = Not a Number)

    alert("Entrada inválida. Por favor, digite um número.");
    // Se não for um número válido, mostra um alerta avisando o usuário
} else {
    // Se o valor digitado for um número válido...

    if (numero % 2 === 0) {
        // Verifica se o número é divisível por 2 (resto zero), ou seja, é par

        document.writeln(`O número ${numero} é PAR.`);
        // Exibe na página a mensagem dizendo que o número é par
    } else {
        // Caso contrário (resto diferente de zero) é ímpar

        document.writeln(`O número ${numero} é ÍMPAR.`);
        // Exibe na página a mensagem dizendo que o número é ímpar
    }
}
