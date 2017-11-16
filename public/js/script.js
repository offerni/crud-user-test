if ($('[name="data_nascimento"]').length) {
    new Cleave('[name="data_nascimento"]', {
        date: true,
        datePattern: ['d', 'm', 'Y']
    });
}


var cpf = $('[name="cpf"]');

function checkCpf() {
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

    cpf.on('blur', function () {
        checkCpf();
    });

}

