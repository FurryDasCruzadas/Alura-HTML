function tocaSom(Seletor) {
  const elementos = document.querySelector(Seletor);
  
  if (elementos != null && elementos.localName == 'audio'){
    elementos.play();
  }
  else{
    console.log("Valor Inserido Invalido");
  }
}

const listaDeTeclas = document.querySelectorAll(".tecla");

//para
for (let contador = 0; contador < listaDeTeclas.length; contador++) {
  const tecla = listaDeTeclas[contador];
  const instrumento = tecla.classList[1];
  const idAudio = `#som_${instrumento}`; //template string

  tecla.onclick = function () {
    tocaSom(idAudio);
  };

  tecla.onkeydown = function (Valor) {
     if (Valor == 'Space' || Valor == 'Enter') {
      tecla.classList.add("ativa");
  }
}

  tecla.onkeyup = function () {
    tecla.classList.remove("remove");
  };
}
