// Modal para excluir------------------------------------------
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var obtn = document.getElementById("moBtn");

var cbtn = document.getElementById("cBtn");
var sbtn = document.getElementById("sBtn");
var span = document.getElementsByClassName("close")[0];

function abrirModalExcluir() {
  modal.showModal();
}

function fecharModalExcluir() {
  modal.close();
}

btn.onclick = abrirModalExcluir;
obtn.onclick = abrirModalExcluir;

span.onclick = fecharModalExcluir;
cbtn.onclick = fecharModalExcluir;
sbtn.onclick = fecharModalExcluir;

modal.onclick = function (event) {
  if (event.target == modal) {
    modal.close();
  }
};
//-------------------------------------------------------------

//Modal de edição----------------------------------------------
var modalEdicao = document.getElementById("modalEdicao");
var botaoEditar = document.getElementById("botaoEditar");

botaoEditar.onclick = function () {
  modalEdicao.showModal();
};

modalEdicao.onclick = function (event) {
  if (event.target == modalEdicao) {
    modalEdicao.close();
  }
};
//-------------------------------------------------------------

//Modal de vizualização----------------------------------------
var modalVisualizacao = document.getElementById("modalVisualizacao");
var botaoVisualizar = document.getElementById("botaoVisualizar");

botaoVisualizar.onclick = function () {
  modalVisualizacao.showModal();
};

modalVisualizacao.onclick = function (event) {
  if (event.target == modalVisualizacao) {
    modalVisualizacao.close();
  }
};
