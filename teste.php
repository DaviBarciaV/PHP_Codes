<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Página Farmácia</title>
      <style>
        textarea{
            resize: none;
        }
      </style>
    </head>

    <body>
    <form action="teste2.php" class="formulario" method="POST">
      <fieldset>
        <label for="text">Nome: </label><br>

        <input type="text" name="nome" id="name" required><br>

        <label for="text">Sobrenome: </label><br>

        <input type="text" name="sobrenome" id="name" required><br>

        <label for="email">Email: </label><br>

        <input type="email" name="email" id="email" required><br>

        <label for="password">Senha: </label><br>

        <input type="password" name="senha" id="senha" required><br>

        <label for="text">Endereço: </label><br>

        <input type="text" name="endereco" id="address" required><br><br>

        <label for="select">Gênero: </label><br>

        <select value="genero">

          <option value="feminino">Feminino</option>

          <option value="masculino">Masculino</option>

        </select><br><br>

        <label for="textarea">Informações: </label><br>

        <textarea name="textarea" id="textarea" rows="10" cols="50">O medicamento utilizado será a azitromicina (antibiótico), uso oral a cada 12 horas.</textarea><br><br>

        <input type="submit" value="Enviar">

        <input type="reset" value="Limpar">
      </fieldset>

    </form>



    



    

    </body>

  </html>