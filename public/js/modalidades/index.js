//chama tabela de get.php
$("#get").load("get.php");

redirect = function () {
  location.href = "insert.php";
};

selecionaLinha = function (id, descricao) {
  $("#id").val(id);
  $("#descricao").val(descricao);
};

atualizaTabela = function () {
  $("#get").load("index.php");
};

document.getElementById("editar").addEventListener("click", function (event) {
  event.preventDefault();

  let dadosForm = $("#frm").serialize();

  $.ajax({
    type: "POST",
    url: "../../controller/modalidade/editController.php",
    data: dadosForm,
    dataType: "json",
    success: function (response) {
      console.log(response);
    },
  });
});
