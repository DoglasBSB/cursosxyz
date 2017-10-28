<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março", 
	"Abril", "Maio", "Junho", 
	"Julho", "Agosto", "Setembro", 
	"Outubro", "Novembro", "Dezembro"
);

#trazendo o valor e a posição
foreach ($meses as $index => $mes ) {
	
	echo "Indice: ".$index. "</br>";
	echo "O mês é: ".$mes. "</br></br>";
}

echo "<br>";
echo "<hr>";



?>

<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
</form>



<?php

if(isset($_GET)){

	foreach ($_GET as $key => $value) {

		echo "Nome do campo: ".$key."<br>";

		echo "Valor do campo: ".$value;

		echo "<br>";
	}

}


?>
