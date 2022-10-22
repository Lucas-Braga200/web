<html>
  <head>
    <meta charset="utf-8">
    <title>Atividade 02</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-blue-500 p-10">
      <div class="bg-white p-3 rounded-lg">
        <?php
          require_once('./funcao.php');
          $numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49);
          for ($i = 0; $i < count($numbers); $i++) {
            if (verifyNumber($numbers[$i])) {
              echo "<div class='py-3'>O Número " . $numbers[$i] . " é: Par</div>";
            } else {
              echo "<div class='py-3'>O Número " . $numbers[$i] . " é: Impar</div>";
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
