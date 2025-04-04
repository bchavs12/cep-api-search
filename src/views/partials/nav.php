<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <a href="https://github.com/BKSystems" class="list-none" target="_blank" title="Acesse meu perfil do github">
            <img class="h-8 w-8" src="https://avatars.githubusercontent.com/u/191304098?v=4">
          </a>
        </div>
        <div class=" md:block">
          <div class="ml-10 flex  space-x-4">
            <a href="<?= $baseRoute ?>/"
              class="<?= urlIs($baseRoute . '/') ? 'bg-gray-900 text-white' : 'text-white' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              Home
            </a>
            <a href="<?= $baseRoute ?>/cadastrar"
              class="<?= urlIs($baseRoute . '/cadastrar') ? 'bg-gray-900 text-white' : 'text-white' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              Cadastrar
            </a>
            <a href="<?= $baseRoute ?>/visualizar"
              class="<?= urlIs($baseRoute . '/visualizar') ? 'bg-gray-900 text-white' : 'text-white' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
              Visualizar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>