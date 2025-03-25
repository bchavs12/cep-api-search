<form id="clienteForm" class="container mx-auto p-4">
  <div id="containerForm">
    <h2 class="text-2xl font-bold  text-gray-800 mb-4">Insira seus dados</h2>
    <!-- Input CEP -->
    <div class="mb-4">
      <label class="block text-gray-700 font-medium">CEP:</label>
      <input type="text" id="cli_cep" placeholder="Digite seu CEP" maxlength="8"
        class="max-w-fit p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Campos Autopreenchidos -->
    <div id="autoFields" class="hidden">
      <div class="mb-4">
        <label class="block text-gray-700 font-medium">Logradouro:</label>
        <input type="text" id="cli_logradouro" disabled class="w-full p-2 border rounded-lg bg-gray-200">
      </div>

      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-gray-700 font-medium">Bairro:</label>
          <input type="text" id="cli_bairro" disabled class="w-full p-2 border rounded-lg bg-gray-200">
        </div>
        <div>
          <label class="block text-gray-700 font-medium">Cidade:</label>
          <input type="text" id="cli_cidade" disabled class="w-full p-2 border rounded-lg bg-gray-200">
        </div>
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 font-medium">UF:</label>
        <input type="text" id="cli_uf" disabled class="w-full p-2 border rounded-lg bg-gray-200">
      </div>
    </div>

    <!-- Campos para Inserção de Dados -->
    <div id="userFields" class="hidden">
      <div class="mb-4">
        <label class="block text-gray-700 font-medium">Nome:</label>
        <input type="text" id="cli_nome" placeholder="Insira seu nome"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-gray-700 font-medium">Número:</label>
          <input type="text" id="cli_numero" placeholder="Insira seu contato"
            class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="block text-gray-700 font-medium">Complemento:</label>
          <input type="text" id="cli_complemento" placeholder="casa | apartamento | etc"
            class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>

      <button type="submit"
        class="w-full bg-blue-500 text-white font-semibold p-2 rounded-lg hover:bg-blue-600 transition duration-200">
        Salvar
      </button>
    </div>
  </div>

  <h3 id="formMessage" class="hidden text-2xl text-center text-green-800">🎉 Dados salvos com sucesso ✔</h3>
</form>