/**
* additional languague Portugues
*
*
** */
  jQuery.extend(jQuery.validator.messages, {
    required: "Este campo é obrigatório.",
    remote: "Por favor, preencha este campo.",
    email: "Por favor insira um email válido",
    url: "Por favor, digite uma URL válida.",
    date: "Por favor, insira uma data válida.",
    dateISO: "Por favor, insira uma data (ISO) válido.",
    number: "Por favor insira um número inteiro válido.",
    digits: "Por favor, digite apenas dígitos.",
    creditcard: "Por favor insira um cartão válido.",
    equalTo: "Por favor, insira o mesmo valor novamente.",
    accept: "Por favor preencha com uma extensão aceito.",
    maxlength: jQuery.validator.format("Por favor, não inserir mais de {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, não escreva menos de {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, insira um valor entre {0} e {1} caracteres."),
    range: jQuery.validator.format("Por favor, insira um valor entre {0} e {1}."),
    max: jQuery.validator.format("Por favor, indique inferior ou igual a {0} valor."),
    min: jQuery.validator.format("Por favor insira um valor maior ou igual a {0}.")
  });