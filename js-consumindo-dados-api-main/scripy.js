async function buscarEndereço() {
  try {
    var consoleCEP = await fetch("https://viacep.com.br/ws/95900010/json/");

    var consuoltaCEPconve = await consoleCEP.json();

    if (consuoltaCEPconve.erro) {
      throw Error("CEP nao existente");
    }

    var cidade = document.getElementById('cidade');
    var logradouro = document.getElementById('endereco');
    var estado = document.getElementById('estado');
    var bairro = document.getElementById('bairro');


    cidade.value = consuoltaCEPconve.localidade;
    logradouro.value = consuoltaCEPconve.logradouro;
    estado.value = consuoltaCEPconve.uf;
    bairro.value = consuoltaCEPconve.bairro

    console.log(consuoltaCEPconve);
    return consuoltaCEPconve;
  } catch (erro) {
    console.log("erro");
  }
}

buscarEndereço();

var cep = document.getElementById("cep");
cep.addEventListener("focusout", () => buscarEndereço());
