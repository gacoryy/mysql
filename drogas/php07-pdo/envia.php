<?php 

//conexao com banco de dados
$conecta = new PDO("mysql:host=localhost;dbname=tcc;"  , "root" , "");

//dodos obtidos pelo formulário
$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];
$repita = $_POST['senha2'];


//inserir tabela
$sql = 'insert into cadastro(id,nome,email,senha,confirma) values(null, "'.$nome.'", "'.$email.'", "'.$senha.'", "'.$repita.'" ) ';

$insere = $conecta-> prepare ($sql);
$insere->execute();
//imprimindo msg de sucesso
echo("cadastro preenchido com sucesso!");
 ?>