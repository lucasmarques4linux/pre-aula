<?php 

require_once 'conexao.php';

$id = 3;

$sql = "DELETE FROM tb_alunos WHERE id = '{$id}'";


var_dump($con);
$result = $con->exec($sql);

var_dump($result);