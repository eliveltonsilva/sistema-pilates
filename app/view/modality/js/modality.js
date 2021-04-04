
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
        alert("Modalidade é obrigatório!");
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
                console.log(response);
            }
        });

        resetInput();
    }
});

//buscar modalidade
$("button#search").click(function (event) {
    event.preventDefault();

    if (querySelector("#options").value == "") {
        alertify.alert("Atenção", "Selecione um status para busca!");
        querySelector("#options").classList.add("is-invalid");
    } else {
        jQuery.ajax({
            method: "POST",
            url: "../../controller/modality/modalityController.php",
            data: {
                case: "get",
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
