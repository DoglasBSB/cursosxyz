<<<<<<< HEAD:PHP7 - Udemy/exemplo01.php
<?php
function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	print (f($a, 4)); 
=======
<?php
function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	print (f($a, 4)); 

	TETE
>>>>>>> d8a1a2e7a74487067374b914fe654e473d5676e5:PHP7/exemplo01.php
?>