$('#frm').submit(function (e) {
    e.preventDefault();

    let descricao = document.getElementById('descricao');

    if (descricao.value != "") {
        $.ajax({
            url: "../../controller/modalidade/addController.php",
            method: "POST",
            data: {
                descricao: descricao.value
            },
            dataType: "json",
        }).done(function (result) {
            alert("Salvo com sucesso!");
            descricao.style.border = "1px solid #ced4da";
            descricao.value = null;
            console.log(result);
        });
    } else {
        alert("Preecha todos os campos!");
        descricao.style.border = "1px solid red";
    }

});