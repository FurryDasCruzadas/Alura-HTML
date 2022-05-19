const BotaoMenu = document.querySelector('.cabecalho__menu');
const menu= document.querySelector('.MenuLateral');

BotaoMenu.addEventListener('click', () =>{
  menu.classList.toggle('MenuLateral--ativo')
})