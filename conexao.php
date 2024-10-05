<?php


//Realizando conexão com o DB**
try{

    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=nasa_database", "root", "");
    //echo("DEu certo!");

} catch(PDOexception $e){

    echo "Falha ao conectar!";

}


//

?>