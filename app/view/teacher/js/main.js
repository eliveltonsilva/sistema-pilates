
var url_cpf = `https://api.postmon.com.br/v1/cep/${86455000}`;

$.ajax({
  url: url_cpf,
  dataType: 'json',
    success: function (data) {
        document.getElementById('name').value = data.cidade
        console.log(data)
    }
});