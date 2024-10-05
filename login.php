<?php

function sanitizar_texto($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}


if(isset($_POST['email']) && isset($_POST['senha'])){
        
    include_once 'conexao.php';
        $email = sanitizar_texto($_POST['email']);
        $senha = $_POST['senha'];

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Insira um e-mail válido!";
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
                    
                    echo "Login realizado com sucesso!";

                } else {
                    
                    echo "Senha incorreta!";
                }

              //caso o usuário não exista...  
            } else {
                
                echo "Usuário não encontrado!";
            } 
        }

}
 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<h1>Entrar</h1>
    <p>
        <label for="">E-mail: </label>
        <input type="email" name="email">
    </p>
    <p>
        <label for="">Senha: </label>
        <input type="password" name="senha">
    </p>
    <button type="submit">Entrar</button>
    </form>    
    <p><a href="#">Esqueci minha senha</a></p>
    <p><a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>