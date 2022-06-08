<?php
require_once("user.php");
$u = new usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>

<body>
    <nav-bar>
        <a href="index.php">Login</a>
    </nav-bar>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" autocomplete="off" require>
        <input type="email" name="email" placeholder="E-mail" autocomplete="off" require>
        <input type="password" name="senha" placeholder="Senha" require>
        <input type="password" name="confSenha" placeholder="Confirmar senha" require>
        <input type="submit" value="Próximo">
    </form>

    <?php
    if (isset($_POST['email'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confSenha']);
        if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conn("ajuda","localhost","root","");
            if($u->msgErro == ""){
                if($senha == $confirmarSenha){
                    if($u->cadastro($nome,$email,$senha)){
                        echo "Usuário cadastrado com sucesso!";
                    }
                } else{
                    echo "Senha e confirmar senha não correspondem";
                }
            } else{
                echo "Erro: ". $u->msgErro;
            }
        } else{
            echo "Preencha todos os campos!";
        }
    }
    ?>
</body>

</html>