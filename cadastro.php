<?php


// Função para sanitizar entradas de texto (impede XSS)
function sanitizar_texto($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}


include_once 'conexao.php';

$erro = "";

//caso o POST tenha sido enviado, o código começa uma série de verificações.
if($_SERVER['REQUEST_METHOD'] === 'POST'){

if(empty($_POST['nome'])){
    $erro = "Insira um nome!";
} elseif(strlen($_POST['nome']) < 7){
    $erro = "Insira um nome e sobrenome válido";
} else{
    $nome = sanitizar_texto($_POST['nome']);
}

if(empty($_POST['email'])){
    $erro = "Insira um e-mail válido!";
} else{
    $email = $_POST['email'];
    $email = sanitizar_texto($_POST['email']);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
    } else{
        $erro = "Insira um e-mail válido!";
    }
}

if(isset($_POST['instituicao'])){
    $instituicao = sanitizar_texto($_POST['instituicao']);
} 


if(empty($_POST['data_nascimento'])){
    $erro = "Preencha a data de nascimento!";
} else{
    $data_nascimento = sanitizar_texto($_POST['data_nascimento']);
}

if(!isset($_POST['senha']) || !isset($_POST['confirma_senha'])){
    $erro = "Digite e confirme sua senha!"; 
}elseif(strlen($_POST['senha']) < 6){
    $erro = "Digite uma senha com pelo menos 6 dígitos.";
}elseif($_POST['senha'] != $_POST['confirma_senha']){
    $erro = "As senhas não são iguais!";
} else{
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
}

if($erro){
    echo "<h1 style=\"color: white\"\>$erro</h1>";
} else{
    //inserindo os dados no db
    $insert = $conectar->prepare("INSERT INTO usuarios (user_nome, user_email, user_instituicao, user_nascimento, user_senha, user_cadastro) 
    VALUES (:nome, :email, :instituicao, :data_nascimento, :senha, NOW())");

    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':instituicao', $instituicao);
    $insert->bindParam(':data_nascimento', $data_nascimento);
    $insert->bindParam(':senha', $senha);
    $insert->execute();
    if($insert){
        echo "DEU CERTO!";
        die();
        unset($_POST); 
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
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css"> <!-- Use o mesmo arquivo CSS -->
</head>
<body>
    <header>
        <div class="img-nav">
            <!-- Insira a imagem ou logotipo aqui -->
            <img src="caminho/para/seu/logo.png" alt="Logo" />
        </div>
    </header>

    <div class="login-page">
        <div class="form">
            <form class="register-form" method="POST">
                <p><span><b>Obrigatório *</b></span></p>
                <input type="text" placeholder="Nome Completo*" required name="nome" value="<?php if(isset($_POST['nome'])){ echo $_POST['nome'];} ?>" />
                <input type="email" placeholder="E-mail*" required name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" />
                <input type="text" placeholder="Instituição" name="instituicao" value="<?php if(isset($_POST['instituicao'])){ echo $_POST['instituicao'];} ?>" />
                <input type="date" placeholder="Data de Nascimento*" required name="data_nascimento" value="<?php if(isset($_POST['data_nacimento'])){ echo $_POST['data_nascimento'];} ?>" />
                <input type="password" placeholder="Senha*" required name="senha" />
                <input type="password" placeholder="Confirma Senha*" required name="confirma_senha" />
                <button type="submit">Cadastrar</button>
                <p class="message">Já possui cadastro? <a href="login.php">Entrar</a></p>
            </form>
        </div>
    </div>

    <video loop autoplay muted playsinline class="background-video">
        <source src="./img/videook.mp4" type="video/mp4"> <!-- TROCAR VÍDEO -->
        Seu navegador não suporta a tag de vídeo.
    </video>
</body>
</html>
