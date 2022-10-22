<?php
  $username = 'Lucas';
  $password = '12345678';

  $user;
  $pass;

  $error;
  $connected = false;

  if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
      $user = $_POST['username'];
      $pass = $_POST['password'];

      if ($user == $username && $pass == $password) {
        $connected = true;
      } else {
        $error = 'Usuário e senha estão incorreto.';
      }
    } else {
      $error = 'Usuário e senha não foram inseridos. Tente novamente.';
    }
  } else {
    $error = 'Usuário e senha não foram inseridos. Tente novamente.';
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Atividade 02</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-blue-500 h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Jost', sans-serif">
      <div class="p-10 rounded-lg bg-gray-200">
        <div>
          <?php
            if (isset($error)) {
              ?>
              <h2 class="text-lg text-normal text-gray-600 mb-2 text-red-500">
                <?php
                  echo $error;
                ?>
              </h2>
              <?php
            } else {
              ?>
              <h2 class="text-lg text-normal text-gray-600 mb-2 text-green-500">
                <?php
                  echo "Você está conectado.";
                ?>
              </h2>
              <?php
            }
          ?>
        </div>
        <a href="/p1_20220920/atividade_02/index.php" class="w-full p-2 bg-blue-500 text-white font-medium rounded text-sm">Voltar</a>
      </div>
    </div>
  </body>
</html>
