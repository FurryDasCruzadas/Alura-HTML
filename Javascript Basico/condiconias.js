const Salvador = 1;
const SãoPaulo = 2;

const ListaDeDestino = new Array(`SãoPaulo`, `Salvador`);

const IdadeComprador = 18;
const acomp = 0;

if (IdadeComprador >= 18  || acomp == 1 ) {
  console.log("pode vender");
  ListaDeDestino.splice(0, 1);
  console.log(ListaDeDestino);
} else console.log("nao pode vender1");

//ListaDeDestino.push(`Rio Grande`)
//console.log(ListaDeDestino)
//ListaDeDestino.splice(0,1)
//console.log( ListaDeDestino[1])
