<?php
require_once 'config.php';
require_once './public/utils/functions.php';

$page = $_GET['page'] ?? 'login';

$allowed_pages = ['home', 'create', 'update', 'delete', 'login'];

if (!in_array($page, $allowed_pages)) {
  $page = 'login';
}

$page = "./public/pages/$page.php";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="/public/assets/css/output.css" />
</head>

<body class="font-inter">
  <div class="flex min-h-screen">
    <?php include $page ?>
  </div>

  <script src="https://unpkg.com/lucide@latest"></script>
  <script>
    lucide.createIcons();
  </script>
</body>

</html>