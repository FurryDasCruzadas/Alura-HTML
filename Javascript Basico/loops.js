const Salvador = 1;
const SãoPaulo = 2;


const ListaDeDestino = new Array(`SãoPaulo`, `Salvador`);

ListaDeDestino.push(`Rio Grande`)

const IdadeComprador = 18;
let Acomp = false;
let Passagem = false;
const destino = "SãoPaulo";
let contador = 0;

console.log("\nDestinos");
console.log(ListaDeDestino);
const Comprar = (IdadeComprador >= 18  || acomp == true );

while(contador<3){
  if(ListaDeDestino[contador] == destino){
    console.log("Destino existe")
    break;
  }
  else{
    console.log("nao existe")
  }
  contador++;

}


