function getSelector(value){
    return document.querySelector(value);
}

document.getElementById("salvar").addEventListener("click", function (event) {
  let inputs = document.querySelectorAll("#frm [name]");
  event.preventDefault();

  inputs.forEach(function (field, index) {
    if (field.value == "") {
      alert("Todos os campos são obritagórios");
    } else {
      let dadosForm = $("#frm").serialize();

      $.ajax({
        type: "POST",
        url: "../../controller/modalidade/insertController.php",
        data: dadosForm,
        dataType: "json",
        success: function (response) {
          console.log(response);
        },
      });

      $("#frm")[0].reset();
    }
  });
});
