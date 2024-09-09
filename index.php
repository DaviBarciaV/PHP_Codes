<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body {
            font-family: Bahnschrift;
            margin: 0;
            padding: 0;
            color: #011d2b
        }

        .page {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background-color: #04aed8;
        }

        .formLogin {
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 7px;
            padding: 40px;
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.4);
            gap: 5px
        }

        .areaLogin img {
            width: 420px;
        }

        .formLogin h1 {
            text-align: center;
            padding: 0;
            margin: 0 !important;
            font-weight: 500;
            font-size: 2.3em;
        }

        .formLogin p {
            display: inline-block;
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .formLogin input {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            margin-top: 5px;
            border-radius: 4px;
            transition: all linear 160ms;
            outline: none;
        }


        .formLogin input:focus {
            border: 1px solid  #0c39b3;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
        }

        .formLogin a {
            display: inline-block;
            text-align: center;
            margin-bottom: 20px;
            font-size: 13px;
            color: #555;
            transition: all linear 160ms;
        }

        .formLogin a:hover {
            color: #0b77e4;
            transform: scale(1.03);

        }

        .btn {
            background-color: #0c39b3;
            color: #fff;
            font-size: 14px;
            font-weight: 400;
            font-family: Bahnschrift;
            border: none !important;
            transition: all linear 160ms;
            cursor: pointer;
            margin: 0 !important;

        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #0676e6;

        }
    </style>
</head>
    <body>
    <?php 
            // Exemplo de página de login em PHP
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            echo "Email: " . $email;
            echo "Senha: ". $senha;
            // Lógica para verificar as credenciais do usuário e redirecioná-lo para a página inicial
        ?>

        <div class="page">
        <form method="POST" class="formLogin">
            <h1>LOGIN</h1>
            <p>Digite os seus dados de acesso no campo abaixo</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" required />
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required />
            <a href="/">Esqueci minha senha</a>
            <input type="submit" value="ACESSAR" class="btn" />
        </form>
    </div>
</body>
</html>