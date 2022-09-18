<?php

$arquivo = fopen("data.json","r");
$dataJS = json_decode(fread($arquivo));
echo $_POST["nome"];
$data = array("nome"=>$_POST("nome"));
$arquivo = fopen("data.json","+w");
fwrite($arquivo,json_encode($data));
fclose($arquivo);

?>