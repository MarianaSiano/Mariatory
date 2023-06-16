// document.getElementById('olho').addEventListener('mousedown', function() {
//  document.getElementById('senha').type = 'text';
// });
  
//  document.getElementById('olho').addEventListener('mouseup', function() {
//   document.getElementById('senha').type = 'password';
//  });

//Variável para visualizar a senha
let icone = document.querySelector('.olho');

//Funcionalidade para visualizar a senha
icone.addEventListener('click', ()=>{
  let inputSenha = document.querySelector('#senha')

  if (inputSenha.getAttribute('type') == 'password')
    inputSenha.setAttribute('type', 'text')
  else
    inputSenha.setAttribute('type', 'password')
});