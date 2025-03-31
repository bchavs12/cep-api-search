<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/nav.php' ?>
<?php require_once 'partials/header.php' ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h2 class="text-xl font-semibold text-gray-800">Na aba <a href="<?= $baseRoute ?>/cadastrar"> <span
          class=" text-blue-600 rounded-md px-1 py-1 text-lg hover:underline-offset-4 hover:underline font-medium">Cadastrar</span>
      </a></h2>
    <p class="ml-4 text-gray-700 mt-2">
      Você poderá inserir seu CEP, e automaticamente preencherá os campos
      <span class="font-semibold">Logradouro, Bairro, Cidade e UF</span>.
      Após isso, será necessário informar seu
      <span class="font-bold">nome</span>, <span class="font-bold">número</span> e
      <span class="font-bold">complemento</span>, e seu registro será salvo no sistema.
    </p>

    <hr class="my-4 border-gray-300">

    <h2 class="text-xl font-semibold text-gray-800">Na aba
      <a href="<?= $baseRoute ?>/visualizar"> <span
          class=" text-blue-600 rounded-md px-1 py-1 text-lg hover:underline-offset-4 hover:underline font-medium">Visualizar</span>
      </a>
    </h2>
    <p class="ml-4 text-gray-700 mt-2">
      Você poderá visualizar seus dados registrados.
    </p>

    <hr class="my-4 border-gray-300">

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-8 mt-4">
      <p class="font-semibold">
        Para visualizar ou registrar CEPs, é necessário um banco de dados de sua preferência.
      </p>
      <p class="font-semibold mt-2">
        Para melhor entendimento da aplicação, é necessário conhecimento em PHP.
      </p>
      <p class="mt-2">
        Para leitura e melhor entendimento do código, acesse o
        <a href="https://github.com/BKSystems/cep-api-search" target="_blank"
          class="text-blue-600 underline font-semibold">
          GITHUB do projeto
        </a>.
      </p>
    </div>
  </div>
</main>

<?php require_once 'partials/footer.php' ?>