$(document).ready(function () {
  $("#clienteForm").submit(function (event) {
    event.preventDefault();

    let cliente = {
      cli_nome: $("#cli_nome").val().trim(),
      cli_cep: $("#cli_cep").val(),
      cli_logradouro: $("#cli_logradouro").val(),
      cli_numero: $("#cli_numero").val(),
      cli_complemento: $("#cli_complemento").val(),
      cli_bairro: $("#cli_bairro").val(),
      cli_cidade: $("#cli_cidade").val(),
      cli_uf: $("#cli_uf").val(),
    };

    if (cliente.cli_cep.length === 8 && cliente.cli_nome !== "") {
      console.log(cliente);

      // $.post()


      $("#containerForm").addClass("hidden");
      $("#formMessage").removeClass("hidden");
    } else {
      alert("Campo CEP E Nome precisam estar preenchidos");
    }
  });

  $("#cli_cep").on("blur", function () {
    let cep = $(this).val().replace(/\D/g, "");

    if (cep.length === 8) {
      $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`,
        type: "GET",
        dataType: "json",
        success: function (data) {
          $("#cli_logradouro").val(data.logradouro);
          $("#cli_bairro").val(data.bairro);
          $("#cli_cidade").val(data.localidade);
          $("#cli_uf").val(data.uf);

          $("#autoFields").removeClass("hidden"); // Exibe os campos preenchidos
          $("#userFields").removeClass("hidden");
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

      $("#autoFields").addClass("hidden"); // Exibe os campos preenchidos
      $("#userFields").addClass("hidden");
    }
  });
});
