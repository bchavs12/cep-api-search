<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/nav.php' ?>

<main>
  <div class="container mx-auto p-4">

    <h3 class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 text-2xl text-center text-green-800">
      🎉 Dados salvos com sucesso ✔

    </h3>
    <hr class="my-4 border-gray-300">

    <div class="text-center">
      <a href="<?= $baseRoute ?>/visualizar"> <span
          class=" text-blue-600 rounded-md px-1 py-1 text-lg hover:underline-offset-4 hover:underline font-medium">Visualize
          seus registros</span>
      </a>
    </div>
  </div>

</main>

<?php require_once 'partials/footer.php' ?>