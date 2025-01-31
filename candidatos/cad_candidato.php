<link rel="stylesheet" href="confirmado.css">
<?php

$conexao = mysqli_connect('localhost','root','','cadastro');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$datNasc = $_POST['datNasc'];
$email = $_POST['email'];

$sql = "INSERT INTO participantes(nome,cpf,datNasc,email)lalues('$nome','$cpf',$datNasc','$email')";

$retorno = mysqli_query($conexao,$sql);
echo 'cliente cadastrado com Sucesso!'
?>
<hr>
<a href="candidatos.php">TELA INICIL</a>