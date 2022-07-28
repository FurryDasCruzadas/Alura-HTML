var pacientes = document.querySelectorAll(".paciente");

for (var i = 0; i < pacientes.length; i++) {
  var paciente = pacientes[i];

  var tdPeso = paciente.querySelector(".info-peso");
  var peso = tdPeso.textContent;

  var tdAltura = paciente.querySelector(".info-altura");
  var altura = tdAltura.textContent;

  var tdImc = paciente.querySelector(".info-imc");

  var pesoEhValido = true;
  var alturaEhValida = true;

  if (peso <= 0 || peso >= 1000) {
    console.log("Peso inválido!");
    pesoEhValido = false;
    tdImc.textContent = "Peso inválido";
    paciente.classList.add("campo-invalido");
  }

  if (altura <= 0 || altura >= 3.0) {
    console.log("Altura inválida!");
    alturaEhValida = false;
    tdImc.textContent = "Altura inválida";
    paciente.classList.add("campo-invalido");
  }

  if (alturaEhValida && pesoEhValido) {
    var imc = peso / (altura * altura);
    tdImc.textContent = imc.toFixed(2);
  }
}

var botaoadd = document.querySelector("#adicionar-paciente");

botaoadd.addEventListener("click", function () {
  event.preventDefault();
  console.log("oi");

  var form = document.querySelector("#form-adiciona");

  var nome = form.nome.value;
  var peso = form.peso.value;
  var altura = form.altura.value;
  var gordura  = form.altura.value;

  var pacienteTR = document.createElement("tr");
  
  var nomeTD = document.createElement("td");
  var pesoTD = document.createElement("td");
  var alturaTD = document.createElement("td");
  var gorduraTD = document.createElement("td");
  var imcTD = document.createElement("td");
  
  nomeTD.textContent = nome;
  pesoTD.textContent = peso;
  alturaTD.textContent = altura;
  gorduraTD.textContent = gordura;

  pacienteTR.appendChild(nomeTD);
  pacienteTR.appendChild(alturaTD);
  pacienteTR.appendChild(gorduraTD);
  pacienteTR.appendChild(pesoTD);

  var tabela = document.querySelector("#tabela-pacientes");
   tabela.appendChild(pacienteTR)


});
