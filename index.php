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
    <title>login</title>
</head>

<body>
    <form method="POST">
        <input type="email" name="email" placeholder="E-mail" autocomplete="off">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Próximo">
    </form>
    <div>
        <a href="cadastro.php">Ainda não possui conta? Cadastre-se!</a>
    </div>
    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        if (!empty($email) && !empty($senha)) {
            $u->conn("ajuda","localhost","root","");
            if($u->msgErro == ""){
                if($u->logar($email,$senha)){
                    header("location:pos-login.php");
                }
                else{
                    echo "E-mail e/ou Senha estão incorretos!";
                }
            } else{
                echo "Erro: " . $u->msgErro;
            }
        } else{
            echo "Preencha todos os campos!";
        }
    }
    ?>
</body>

</html>