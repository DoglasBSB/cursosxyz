<?php

//função no parametro da function
function test($callback){

    //processo lento
    $callback();

}

    test(function(){
        echo "Terminou!";
    });

?>