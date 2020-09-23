<?php
//criar a conexão com o banco de dados
$host = 'localhost';//nome do servidor
$user = 'root';//nome do usuário
$senha = '';//senha do banco
$banco = 'pandemia';//nome do banco


$conn = new mysqli ($host, $user, $senha, $banco);
//verificar a conexão
/*connect_error - retorna a descrição do erro
do último erro deconexão, se houver
*/
//die - equivalente a exit()
if ($conn->connect_error){
	die("Falha na conexão: ".$conn->connect_error);
}

?>