<?php
	require ('conexao.php');
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$data = $_POST['data'];
	$sexo = $_POST['sexo'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$sentimento = $_POST['sentimento'];
	$estresse = $_POST['estresse'];
	$dormir = $_POST['dormir'];
	$disposicao = $_POST['disposicao'];
	$isolamento = $_POST['isolamento'];
	$alimentacao = $_POST['alimentacao'];
	$bebidas = $_POST['bebidas'];
	$emocao = $_POST['emocao'];
	$fazendo = $_POST['fazendo'];
	$tempo = $_POST['tempo'];
	$financeira = $_POST['financeira'];
	$necessidade = $_POST['necessidade'];
	$termino = $_POST['termino'];
	$obs = $_POST['obs'];
	
	
	
	/*inserir  os dados  da pesquisa no banco pandemia*/ 
$sql = "INSERT INTO covid(nome, sobrenome, dataNascimento, sexo, endereco, numero, bairro, cidade, estado, sentimento, estresse, dormir, disposicao, isolamento, alimentacao, bebidas, emocao, fazendo, tempo, financeira, necessidade, termino, observacao 
)VALUES ('$nome', '$sobrenome', '$data', '$sexo', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$sentimento', '$estresse', '$dormir', '$disposicao', '$isolamento', '$alimentacao', '$bebidas', '$emocao', '$fazendo', '$tempo', '$financeira', '$necessidade', '$termino', '$obs')";

if ($conn->query($sql) === TRUE){
	echo "<script language='javascript' type='text/javascript'>
			alert('Cadastro realizado com sucesso!');
			window.location.href='pesquisa.html';	
			</script>";
			die();
}else{
	echo "Erro: ".$sql."<br/>".$conn->error;
	echo "<br />";
	echo "Não foi possível realizar o cadastro";
}
//finaliza aconaxão com o banco
$conn->close();
?>