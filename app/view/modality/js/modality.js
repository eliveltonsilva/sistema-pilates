
//captura o seletor
function querySelector(value) {
    return document.querySelector(value);
}

function resetInput() {
    let modality = querySelector("#modality");

    querySelector("#error-modality").display = "none";
    modality.classList.remove("is-invalid");
    modality.value = "";
}

//adicionar nova modalidade
$("button#save").click(function (event) {
    event.preventDefault();

    let u_modality = querySelector("#modality");

    if (u_modality.value === "") {
        u_modality.classList.add("is-invalid");
    } else {
        jQuery.ajax({
            type: "POST",
            url: "../../controller/modality/modalityController.php",
            dataType: "json",
            data: {
                case: "new",
                modality: u_modality.value
            },
            success: function (response) {
                console.log("sucess..." + response);
            }
        });
        resetInput();
    }
});

//buscar modalidade
$("button#search").click(function (event) {
    event.preventDefault();

    if (querySelector("#options").value == "") {
        message("Selecione um status para busca!")
        querySelector("#options").classList.add("is-invalid");
    } else {
        jQuery.ajax({
            method: "POST",
            url: "../../controller/modality/modalityController.php",
            data: {
                case: "getFilter",
                modality: querySelector("#modality").value,
                options: querySelector("#options").value
            },
            success: function (response) {
                $("#dados").html(response);
                querySelector("#options").classList.remove("is-invalid");
            }
        });
    }
});

//carregar campos da view de update com base no id
$(document).ready(function () {
    if (querySelector("#id") !== null) {
        $.ajax({
            method: "POST",
            url: "../../controller/modality/modalityController.php",
            dataType: "json",
            data: {
                case: "getId",
                id: querySelector("#id").value
            },
            success: function (response) {
                querySelector("#modality").value = response.descricao;
            }
        });
    }
});

//editar a modalidade
$("button#update").click(function (event) {
    event.preventDefault();
    let u_modality = querySelector("#modality");

    if (u_modality.value === "") {
        u_modality.classList.add("is-invalid");
        message("Modalidade é obrigatório!");
    } else {
        $.ajax({
            method: "POST",
            url: "../../controller/modality/modalityController.php",
            dataType: "json",
            data: {
                case: "update",
                id: querySelector("#id").value,
                modality: querySelector("#modality").value
            },
            success: function (response) {
                console.log("success..." + response);
            }
        });

        alertify.alert("Atenção", "Salvo com sucesso!", function () {
            alertify.message('OK');
            document.location.href = "index.php";
        });
    }
});

//excluir a modalidade
$("button#remove").click(function (event) {
    event.preventDefault();
    $.ajax({
        method: "POST",
        url: "../../controller/modality/modalityController.php",
        dataType: "json",
        data: {
            case: "delete",
            id_remove: querySelector("#id_remove").value
        },
        success: function (response) {
            console.log("success..." + response);
        }
    });
    
    alertify.alert("Atenção", "Excluído com sucesso!", function () {
        alertify.message('OK');
        document.location.href = "index.php";
    });
});

function message(msg) {
    alertify.alert("Atenção", msg, function () {
        alertify.message('OK');
    });
}
