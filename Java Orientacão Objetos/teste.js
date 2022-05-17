const CPFSemFormatacao = 'cpf é 25684677037'

const CPFFormatado = CPFSemFormatacao.replace('25684677037', '256.846.770-37') 

console.log(CPFFormatado)  // O retorno será 'cpf é 256.846.770-37'

const frase = 'Frase que começa com um palavra-feia e tem outra palavra-feia no final'

const fraseAtualizada = frase.replace(/palavra-feia/g, '********') 

console.log(fraseAtualizada) // "Frase que começa com um ******** e tem outra ******** no final"