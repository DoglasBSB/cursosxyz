<?php

$images = scandir("images");
//var_dump($image);

$data = array();

foreach ($images as $img) {
    //in_array faz uma busca dentro de um array
   if (!in_array($img, array(".", ".."))) {

        // Diretório
        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        // Informações do arquivo como diretório, nome e extensão
        $info = pathinfo($filename);
        // Tamanho do arquivo em byts
        $info["size"] = filesize($filename);
        // Para saber a data de modificação do arquivo
        $info["modified"] = date("d-m-Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/cursos/cursosxyz/PHP7/DIR/".str_replace("\\", "/", $filename);
       
        array_push($data, $info);
        //var_dump($info);
   }
}

echo json_encode($data);



?>