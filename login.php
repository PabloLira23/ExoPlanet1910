<?php

function sanitizar_texto($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}


if(isset($_POST['email']) && isset($_POST['senha'])){
        
    include_once 'conexao.php';
        $email = sanitizar_texto($_POST['email']);
        $senha = $_POST['senha'];

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<h1 style=\"color: white\";\>Insira um e-mail válido!</h1>";
        } else {
            // Consultando o sql usando statement do PDO
            $sql_code = "SELECT * FROM usuarios WHERE user_email = :email";
            $stmt = $conectar->prepare($sql_code);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            
            // Executa a consulta para saber se o usuário bate
            $stmt->execute();
            
            // Verifica se o usuário foi encontrado
            if($stmt->rowCount() > 0){
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Função que verifica se a senha fornecida bate com o hash armazenado
                if(password_verify($senha, $user['user_senha'])){
                    header("location: exoplanetas.php");
                    die();
                } else {
                    
                    echo "<h1 style=\"color: white\";\>Senha incorreta!</h1>";
                }

              //caso o usuário não exista...  
            } else {
                
                echo "<h1 style=\"color: white\";\>Usuário não encontrado!</h1>";
            } 
        }

}
 
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <!--<script src="login.js"></script>-->
</head>


<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="Senha" />
                <input type="text" placeholder="E-mail" />
                <button>create</button>
                <p class="message">Já possui cadastro? <a href="#">Entrar</a></p>
            </form>
            <form class="login-form" method="POST">
                <input type="text" placeholder="Seu e-mail" name="email" value="<?php if(isset($_POST['email'])){echo $email;}?>"/>
                <input type="password" placeholder="Senha" name="senha"/>
                <button type="submit">login</button>
                <p class="message">Não está registrado? <a href="cadastro.php">Criar Conta</a></p>
            </form>
        </div>
    </div>

    <video loop autoplay muted playsinline class="background-video">
        <source src="./img/videook.mp4" type="video/mp4"> <!--TROCAR VÍDEO-->
        Seu navegador não suporta a tag de vídeo.
    </video>

</body>
</html>
