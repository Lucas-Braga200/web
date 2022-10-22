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
        <form action="form.php" method="post" class="m-0" style="width: 600px">
          <div class="flex flex-col mb-3">
            <label for="username" class="uppercase text-xs font-bold mb-1">Usuário</label> 
            <input id="username" type="text" name="username" placeholder="Usuário" class="border border-gray-400 p-2 rounded">
          </div>
          <div class="flex flex-col mb-3">
            <label for="password" class="uppercase text-xs font-bold mb-1">Senha</label>
            <input id="password" type="password" name="password" placeholder="Senha" class="border border-gray-400 p-2 rounded">
          </div>
          <div class="w-full">
            <button class="w-full p-2 bg-blue-500 text-white font-medium rounded text-sm">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
