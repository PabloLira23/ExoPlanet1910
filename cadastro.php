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
    echo "<p><b>$erro</b></p>";
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
        unset($_POST); 
        }
    }

}



?>


<form action="" method="post">
    <h1>Cadastre-se</h1>
    <span>*Obrigatório</span>
    <p><label for="">Nome Completo*: </label><input type="text" required placeholder="Digite seu nome completo" name="nome" value="<?php if(!empty($_POST['nome'])){echo $nome;}?>"></p>
    <p><label for="">E-mail*: </label><input type="email" required placeholder="Digite seu melhor e-mail" name="email" value="<?php if(!empty($_POST['email'])){echo $email;}?>"></p>
    <p><label for="">Colégio/Universidade: </label><input type="text" placeholder="Digite onde você estuda" name="instituicao" value="<?php if(!empty($_POST['instituicao'])){echo $instituicao;}?>"></p>
    <p><label for="">Data de nascimento*: </label><input type="date" required name="data_nascimento" value="<?php if(!empty($_POST['data_nascimento'])){echo $data_nascimento;}?>"></p>
    <p><label for="">Senha*: </label><input type="password" required name="senha" placeholder="Mín. 6 dígitos. Pelo menos um caractere especial e um número."></p>
    <p><label for="">Repita a senha*: </label><input type="password" required name="confirma_senha" placeholder="Confirme sua senha."></p>
    <p><button type="submit">Cadastrar</button></p>
</form>
