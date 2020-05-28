<?php
	$stringBusca = "select * from nota";

	$retornoNota = $conexao->query($stringBusca);

	$listarDados = array();//array dinâmico
	while($listar = $retornoNota->fetch_array()) {
		$listarDados[] = $listar;
	}
	?>
	<table>
<th>Nome</th>
<th>Nota1</th>
<th>Nota2</th>
<th>Nota3</th>

	<?php
foreach($listarDados as $chave => $value){
	echo "<tr><td>". $chave . "</td>";
	echo "<td>". $value["idaluno"] . "</td>";
	echo "<td>". $value["nome"] . "</td>";
	echo "<td>". $value["n1"] . "</td>";
	echo "<td>". $value["n2"] . "</td></tr>";
	echo "<td>". $value["n3"] . "</td></tr>";



}
?>
</table>
