function redirect(){
    document.location.href = "new.php";
}

function getSelector(value) {
    return document.querySelector(value);
}

getSelector("#modalidade").addEventListener("keyup", function (event) {
    event.preventDefault();

    let modalidade = getSelector("#modalidade").value;

    $(document).ready(function () {
        $.ajax({
            type: "POST",
            url: "../../controller/modalidade/getController.php",
            dataType: "json",
            data: {
                modalidade: modalidade
            },
            success: function (response) {
                
                let data = [];
                
//                console.log(response)
                if (typeof response.descricao != "undefined") {
                    
                    data.push(response.descricao);
                    data.push(response.inserido);
                    data.push(response.status);

                    console.log(data);

                    let tr = document.createElement("tr");

                    tr.innerHTML = `
                            <td>
                                <a href="#" class="btn btn-outline-danger btn-sm" title="Excluir Modalidade">Excluir</a>
                                <a href="#" class="btn btn-outline-info btn-sm" title="Editar Modalidade">Editar</a>
                            </td>
                            <td>${data[0]}</td>
                            <td>${data[0]}</td>
                            <td>${data[0]}</td>`

                    getSelector("#dados").appendChild(tr);
                }
            }
        });
    });
});

 