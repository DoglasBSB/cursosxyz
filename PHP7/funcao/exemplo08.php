
<?php

echo '<div class="container">
<div class="row">
    <div class="col-xs-12">
        <div class="page-header">
            <h2>Aula 08 - Função <small><text style="color:#E14F22">  #_Declaração do Tipo de Retorno_# </text></small></h2>
        </div>
    </div>
</div>
</div>';

#DECLARAÇÃO DE TIPOS DE RETORNO

function soma(int ...$valores): string { # faz um cast a conversão do tipo de dados para uma string no retorno.
			//função que soma os valores
	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(20,10,15);
echo "<br>";
echo soma(1.3,4.5);
echo "<br>";

?>