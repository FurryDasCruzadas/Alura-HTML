var frase = $(".frase").text();
var numPalavras = frase.split(" ").length;
var li = $("#info-numero").text(numPalavras);

var campo = $("#campoditar");
campo.on("input", function () {
  var conteudo = campo.val();
  let caracteres = conteudo.length;
  var qutPalavrass = conteudo.split(/\S+/).length - 1;
  $("#contador-palavras").text(qutPalavrass);
  $("#contador-caracteres").text(caracteres);
});


var tempoRest = $('#info-tempo').text();
campo.one("focus",function(){
  var cronometroID = setInterval(() => {
    tempoRest--; 
    $('#info-tempo').text(tempoRest);
    if(tempoRest<=0) {
      campo.attr("disabled",true);
      clearInterval(cronometroID)
    }
  }, 1000);


});