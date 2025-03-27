<?php
require 'functions.php';
// require 'router.php';

require 'Connection.php';

$db = new Database();

$posts = $db->query('SELECT * FROM posts');

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
