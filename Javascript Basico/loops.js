const Salvador = 1;
const SãoPaulo = 2;

const ListaDeDestino = new Array(`SãoPaulo`, `Salvador`);

ListaDeDestino.push(`Rio Grande`);

const IdadeComprador = 18;
let Acomp = false;
let Passagem = false;
const destino = "SãoPaulo";
let contador = 0;

console.log("\nDestinos");
console.log(ListaDeDestino);
const Comprar = IdadeComprador >= 18 || Acomp == true;

while (contador < 3) {
  if (ListaDeDestino[contador] == destino) {
    console.log("Destino existe");
    break;
  }
  contador++;
}

for (let i = 0; i < 3; i++) {
  if (ListaDeDestino[i] == destino) {
    console.log("teste existe");
    break;
  }
}
