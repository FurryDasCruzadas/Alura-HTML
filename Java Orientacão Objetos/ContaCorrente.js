import { Cliente } from "./Cliente";

export class ContaCorrente {
  agencia;
  _saldo = 0;
  _guy;

  set guy(novovalor) {
    if (novovalor instanceof Cliente) this._guy = novovalor;
  }

  sacar(valor) {
    if (this._saldo >= valor) {
      this._saldo -= valor;
      return valor;
    }
  }

  depositar(valor) {
    if (valor <= 0) {
      return;
    }
    this._saldo += valor;
  }

  trasnferir(valor, conta) {
    const valorSacado = this.sacar(valor);
    conta.depositar(valorSacado);
  }
}
