$(document).ready(function () {
  $("#cli_cep").on("blur", function () {
    let cep = $(this).val().replace(/\D/g, "");

    if (cep.length >= 8) {
      $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`,
        type: "GET",
        dataType: "json",
        success: function (data) {
          validarForm(data);
          $("#userFields").removeClass("hidden")
        },
        erro: function () {
          alert("Erro ao buscar o CEP. Tente novamente.");
        },
      });
    } else {
      $("#cli_logradouro").val("");
      $("#cli_bairro").val("");
      $("#cli_cidade").val("");
      $("#cli_uf").val("");

      $("#userFields").addClass("hidden");
    }
  });

  $("#cli_nome").on("blur", function () {
    let nome = $(this).val();

    if (nome !== '' && nome.length > 3) {
      $("#submit-button").removeClass('hidden');
    }
  })

})

function validarForm(data) {
  let cliente = {
    cli_nome: $("#cli_nome").val().trim(),
    cli_cep: $("#cli_cep").val(),
    cli_logradouro: $("#cli_logradouro").val(data.logradouro),
    cli_numero: $("#cli_numero").val(data.numero),
    cli_complemento: $("#cli_complemento").val(data.complemento),
    cli_bairro: $("#cli_bairro").val(data.bairro),
    cli_cidade: $("#cli_cidade").val(data.localidade),
    cli_uf: $("#cli_uf").val(data.uf),
  };
  return cliente;
}
