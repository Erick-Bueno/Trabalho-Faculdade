<?php
session_start();
    include("conexao.php");

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo "informe um email";
        }else if (strlen($_POST['senha']) == 0){
            echo "informe uma senha";
        }else{
            $email = $mysqli -> real_escape_string($_POST['email']);
            $senha = $mysqli -> real_escape_string($_POST['senha']);

            $sql_querytext = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
            $sql_query = $mysqli -> query($sql_querytext) or die("falha na execução do sql". $mysqli ->error);

            $quantidade = $sql_query -> num_rows;

            if($quantidade == 1){
                $usuario = $sql_query ->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }
                $newuser = ucfirst($usuario['email']);
                $_SESSION['id']  = $usuario['id'];
                $_SESSION['email'] = $newuser;

                header("Location:home.php");
            }else{
                echo "falha ao logar email ou senha incorretos";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main class="login-container">
        <section>
            <img class="img-login" src="./imgs//login.svg" alt="">
        </section>
        <section>
            
            <form class="login-form" action="" method="post">
                <h1 class="log">LOGIN</h1>
                <div class="input-mail">
                    <label for="Email">Nome</label>
                    <input type="text" name="email" id="Email" placeholder="Nome">
                </div>
                <div class="input-senha">
                    <label for="senha">Senha</label>
                    <input id="senha" type="password" name="senha" id="senha" placeholder="Senha">
                    <span class="olho"><img src="./imgs/3178377.png" width="20px"  alt=""></span>
                    <span><img src="./imgs/olho.png" class="olho2 visto" alt="" width="20px"></span>
                </div>
                <div class="check">
                    <input type="checkbox" id="checkbox"> <label class="reme" for="checkbox">Remember me</label>
                    <p class="esqueceu">Esqueceu a senha?</p>
                </div>
                <button>Entrar</button>
            </form>
        </section>

    </main>
    <script src="./script.js"></script>
</body>
</html>