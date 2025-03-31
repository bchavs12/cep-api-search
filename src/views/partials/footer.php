</div>

<footer id="site-footer" class="bg-gray-800 text-white text-center py-4">
  <p class="text-sm">&copy; <span id="currentYear"></span> <a href="https://github.com/BKSystems"
      target="_blank">BKSystems.</a> Todos
    os direitos reservados.</p>
</footer>
<?php
if (isset($scripts)) {
  foreach ($scripts as $script) {
    echo "<script src='$script' defer></script>\n";
  }
}
?>
</body>

</html>