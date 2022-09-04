var campo = $(".campo-digitacao");
var tempoInicial = $("#tempo-digitacao").text();

$(function () {
  atualizaTamanhoFrase();
  inicializaContadores();
  inicializaCronometro();
  borda();
  $("#botao-reiniciar").click(reiniciaJogo);
});

function atualizaTamanhoFrase() {
  var frase = $(".frase").text();
  var numPalavras = frase.split(" ").length;
  var tamanhoFrase = $("#tamanho-frase");
  tamanhoFrase.text(numPalavras);
}

function inicializaContadores() {
  campo.on("input", function () {
    var conteudo = campo.val();

    var qtdPalavras = conteudo.split(/\S+/).length - 1;
    $("#contador-palavras").text(qtdPalavras);

    var qtdCaracteres = conteudo.length;
    $("#contador-caracteres").text(qtdCaracteres);
  });
}

function inicializaCronometro() {
  var tempoRestante = $("#tempo-digitacao").text();
  campo.one("focus", function () {
    var cronometroID = setInterval(function () {
      tempoRestante--;
      $("#tempo-digitacao").text(tempoRestante);
      if (tempoRestante < 1) {
        campo.attr("disabled", true);
        clearInterval(cronometroID);
        campo.toggleClass("campo-desativado");
        inserePlacar();
      }
    }, 1000);
  });
}

function borda() {
  var frase = $(".frase").text();
  campo.on("input", function () {
    var digitando = campo.val();
    var comparavel = frase.substr(0, digitando.length);
    if (comparavel == digitando) {
      campo.removeClass("erado");
      campo.addClass("certo");
    } else {
      campo.removeClass("certo");
      campo.addClass("erado");
    }
  });
}

function inserePlacar() {
  var tabela = $(".placar").find("tbody");
  var numPalavras2 = $("#contador-palavras").text();
  var usuario = "joao";
  var botaoRemover =
    "<a href='#'> <i class='small material-icons remover'>delete</i> </a> ";
  var linha =
    "<tr>" +
    "<td>" +
    usuario +
    "</td>" +
    "<td>" +
    numPalavras2 +
    "</td>" +
    "</tr>";
  tabela.append(linha);
}

$(".remover").click(function () {
    $(this).parent().parent().remove();
});

function reiniciaJogo() {
  campo.attr("disabled", false);
  campo.val("");
  $("#contador-palavras").text("0");
  $("#contador-caracteres").text("0");
  $("#tempo-digitacao").text(tempoInicial);
  inicializaCronometro();
  campo.toggleClass("campo-desativado");
}
