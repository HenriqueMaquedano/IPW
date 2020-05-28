<?php
$nome=$_POST["nome"];
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];
$media=($n1+$n2+$n3)/3;
echo "Notas do Aluno(a) $nome, suas notas são:";
echo "<br><br> 1ºTrimestre: $n1<br> 2ºTrimestre: $n2<br> 3ºTrimestre: $n3<br> Media Final: $media<br><br> Voce esta ";

include("conexao.php");

$sql = "insert into nota (nome, n1, n2, n3, media)
values ('$nome', '$n1', '$n2', '$n3','$media')";
$sql;

$retornoInserir = $conexao->query($sql);

$idaluno= $conexao->insert_id;

if($conexao->affected_rows)

if($media>=60){
echo "Aprovado!";
}else
if(($media<70) && ($media>=50)){
echo " em Recuperação!";
}else{
 echo "Reprovado!";
 }

include("consulta.php");

 ?>
