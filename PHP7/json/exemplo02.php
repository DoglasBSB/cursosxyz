<?php
#GERANDO UM ARRAY APARTIR DE UM JSON

$json = '[{"Nome":" Joao Lucas","Idade":1},{"Nome":" Doglas","Idade":26},{"Nome":" Janiely","Idade":30}]';

       $data = json_decode($json, true);
       var_dump($data);

?>