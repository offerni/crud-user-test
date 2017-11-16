if ($('[name="data_nascimento"]').length) { // verifica se existe o input data_nascimento
    new Cleave('[name="data_nascimento"]', {
        date: true,
        datePattern: ['d', 'm', 'Y'] // formata a data
    });
}


var cpf = $('[name="cpf"]');

function checkCpf() { // se o campo do cpf possuir 14 digitos a msg desaparece, caso contrário, exibe msg cpf inválido
    value = cpf.val();

    if (value.length < 14) {
        $('.invalido').show();
    } else {
        $('.invalido').hide();
    }
}

if (cpf.length) {
    new Cleave('[name="cpf"]', {
        delimiters: ['.', '.', '-'],
        blocks: [3, 3, 3, 2],
        numericOnly: true
    });

    checkCpf();

    cpf.on('blur', function () { // chama a function checkCpf() on blur
        checkCpf();
    });

}

