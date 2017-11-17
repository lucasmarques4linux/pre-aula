<?php 

require_once 'conexao.php';

 // 	[id] => 2
 //    	[nome] => Lucas César Marques
 //    	[email] => lucasmarques73@hotmail.com
 //    	[senha] => 123
 //    	[cpf] => 10815386605
 //    	[rg] => 123456
 //    	[dt_nasc] => 

$nome = "mateus";
$email = "mateus@mateus";
$senha = "123";
$cpf = "123";
$rg = "123";

$sql = "UPDATE tb_alunos SET nome = '{$nome}',email = '{$email}', senha = '{$senha}' WHERE id = '2'";


var_dump($con);
$result = $con->exec($sql);

var_dump($result);