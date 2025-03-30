<div class="container mx-auto  p-4">
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="max-h-[45rem] overflow-y-auto">
      <table class="min-w-full table-auto text-sm">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="px-4 py-2 text-left">ID</th>
            <th class="px-4 py-2 text-left">Nome</th>
            <th class="px-4 py-2 text-left">Logradouro</th>
            <th class="px-4 py-2 text-left">Número</th>
            <th class="px-4 py-2 text-left">Complemento</th>
            <th class="px-4 py-2 text-left">Bairro</th>
            <th class="px-4 py-2 text-left">Cidade</th>
            <th class="px-4 py-2 text-left">UF</th>
            <th class="px-4 py-2 text-left">CEP</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-300">
          <?php if ($clientes): ?>
          <?php foreach ($clientes as $cliente): ?>
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_id']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_nome']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_logradouro']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_numero']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_complemento']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_bairro']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_cidade']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_uf']); ?></td>
            <td class="px-4 py-2"><?= htmlspecialchars($cliente['cli_cep']); ?></td>
          </tr>
          <?php endforeach; ?>
          <?php else: ?>
          <tr>
            <td colspan="9" class="px-4 py-2 text-center text-gray-500">Nenhum cliente encontrado.</td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>