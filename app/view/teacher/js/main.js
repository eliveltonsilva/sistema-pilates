//carrega cidade e estado pelo cep
if (querySelector("#cep") !== null) {
    querySelector('#cep').addEventListener("keyup", function () {
        let cep = querySelector("#cep").value;

        if (cep.length === 8) {
            var url_cpf = `https://api.postmon.com.br/v1/cep/${cep}`;

            $.ajax({
                url: url_cpf,
                dataType: "jsonp",
                success: function (response) {
                    querySelector("#city").value = response.cidade;
                    querySelector("#uf").value = response.estado;
                }
            });
        }
    });
}



function resetInput() {
    $("#frm")[0].reset();
}

//captura o seletor
function querySelector(value) {
    return document.querySelector(value);
}

//adicionar nova modalidade
$("button#save").click(function (event) {
    event.preventDefault();
    jQuery.ajax({
        type: "POST",
        url: "../../ajax/teacher_ajax.php",
        dataType: "json",
        data: {
            case: "new",
            name: querySelector("#name").value,
            mail: querySelector("#mail").value,
            birth: querySelector("#birth").value,
            sex: querySelector("#sex").value,
            cpf: querySelector("#cpf").value,
            cep: querySelector("#cep").value,
            city: querySelector("#city").value,
            cell: querySelector("#cell").value,
            uf: querySelector("#uf").value,
            address: querySelector("#address").value,
            number: querySelector("#number").value,
            district: querySelector("#district").value,
            complement: querySelector("#complement").value
        },
        success: function (response) {
            console.log(response);
        },
    });

    resetInput();
});

//buscar modalidade
$("button#search").click(function (event) {
    event.preventDefault();

    if (querySelector("#options").value == "") {
        message("Selecione um status para busca!");
        querySelector("#options").classList.add("is-invalid");
    } else {
        jQuery.ajax({
            method: "POST",
            url: "../../ajax/teacher_ajax.php",
            data: {
                case: "getFilter",
                teacher: querySelector("#teacher").value,
                options: querySelector("#options").value,
            },
            success: function (response) {
                $("#dados").html(response);
                querySelector("#options").classList.remove("is-invalid");
            },
        });
    }
});

//carregar campos da view de update com base no id
$(document).ready(function () {
    if (querySelector("#id") !== null) {
        $.ajax({
            method: "POST",
            url: "../../ajax/teacher_ajax.php",
            dataType: "json",
            data: {
                case: "getId",
                id: querySelector("#id").value,
            },
            success: function (response) {
                querySelector("#name").value = response.nome;
                querySelector("#mail").value = response.email;
                querySelector("#birth").value = response.dt_nascimento;
                querySelector("#sex").value = response.sexo;
                querySelector("#cpf").value = response.cpf;
                querySelector("#cell").value = response.celular;
                querySelector("#cep").value = response.cep;
                querySelector("#city").value = response.cidade;
                querySelector("#uf").value = response.estado;
                querySelector("#address").value = response.endereco;
                querySelector("#number").value = response.numero;
                querySelector("#district").value = response.bairro;
                querySelector("#complement").value = response.complemento;
            },
        });
    }
});

//editar a modalidade
$("button#update").click(function (event) {
    event.preventDefault();

    console.log(querySelector("#id").value)

    $.ajax({
        method: "POST",
        url: "../../ajax/teacher_ajax.php",
        dataType: "json",
        data: {
            case: "update",
            id: querySelector("#id").value,
            name: querySelector("#name").value,
            mail: querySelector("#mail").value,
            birth: querySelector("#birth").value,
            sex: querySelector("#sex").value,
            cpf: querySelector("#cpf").value,
            cell: querySelector("#cell").value,
            cep: querySelector("#cep").value,
            city: querySelector("#city").value,
            uf: querySelector("#uf").value,
            address: querySelector("#address").value,
            number: querySelector("#number").value,
            district: querySelector("#district").value,
            complement: querySelector("#complement").value
        },
        success: function (response) {
            console.log(response);
        },
    });

    alertify.alert("Atenção", "Salvo com sucesso!", function () {
        alertify.message("OK");
        document.location.href = "index.php";
    });
});

//excluir a modalidade
$("button#remove").click(function (event) {
    event.preventDefault();
    $.ajax({
        method: "POST",
        url: "../../ajax/teacher_ajax.php",
        dataType: "json",
        data: {
            case: "delete",
            id_remove: querySelector("#id_remove").value,
        },
        success: function (response) {
            console.log("success..." + response);
        },
    });

    alertify.alert("Atenção", "Excluído com sucesso!", function () {
        ;
        alertify.message("OK");
        document.location.href = "index.php";
    });
});

function message(msg) {
    alertify.alert("Atenção", msg, function () {
        alertify.message("OK");
    });
}
