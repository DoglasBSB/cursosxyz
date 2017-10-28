<?php

echo "<select>"; 

# Fazer aparecer os últimos 100 anos dentro de um option
for ($i = date("Y"); $i > date("Y")-100; $i--)
	{

	echo '<option value="'.$i.'">'.$i.'<option>';
   
    }

echo "</select>";




?>