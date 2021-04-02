
//captura o seletor
function querySelector(value) {
    return document.querySelector(value);
}

//adicionar nova modalidade
querySelector("#save").addEventListener("click", function(event){
    event.preventDefault();
    
   let u_modalidade = querySelector("#modalidade").value;
    
    jQuery.ajax({
        type: "POST",
        url: "../../controller/modalidade/modalidadeController.php",
        dataType: "json",
        'data': {
            case : "new",
            modalidade: u_modalidade
        },
        success: function (response) {
            console.log(response)
        }
    });
});