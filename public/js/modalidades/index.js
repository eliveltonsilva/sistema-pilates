$(document).ready(function () {
//    $('#descricao').keyup(function () {

    $.ajax({
        url: "../../controller/modalidade/getController.php",
        type: 'post',
        dataType: 'json',
        success: function (data) {

            for (var item in data) {
                console.log(data[item].id)
                $('#dados').prepend(
                    "<tr>" +
                        "<td>" + data[item].id + "</td>" +
                        "<td>" + data[item].descricao +"</td>" +
                    "</tr>")
            }
        }
    })
})