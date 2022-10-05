<?php

define('JSON', 'contatos.json');


function formToArray(){
  $foto_destino = '';
  if (isset($_FILES['foto'])){

      // destino do arquivo carregado em "foto"
      $foto_destino = 'imagens/'.$_FILES['foto']['id'];
      // move o arquivo para a pasta destino
      move_uploaded_file($_FILES['foto']['tmp_name'],$foto_destino);
  }

  $data = array(  'id' => isset($_POST['id'])?$_POST['id']:'',
                'nome' => isset($_POST['nome'])?$_POST['nome']:'',
                'sobrenome' => isset($_POST['sobrenome'])?$_POST['sobrenome']:'',
                'dataNasc' => isset($_POST['dataNasc'])?$_POST['dataNasc']:'',
                'email' => isset($_POST['email'])?$_POST['email']:'',
                'telefone' => isset($_POST['telefone'])?$_POST['telefone']:'',
                'parente' => isset($_POST['parente'])?$_POST['parente']:'',
                'origem' => isset($_POST['origem'])?$_POST['origem']:'',
                'foto' => $foto_destino
            );

return $data;

}

function insert($contato){
  $data = fileToArray();

  $contato['id'] = nextID($data);


}

function fileToArray(){

}

function validateData(){

}

function arrayToFile(){

}

function nextID($data){
  $id = 0;
  if($data){
    $id = intval($data[count($data)-1]['id']);
    return ++$id;
  }
}

function findObject($id){

}

function alterar($contato){

}




/*
$arquivo = fopen("data.json","r");
$dataJS = json_decode(fread($arquivo));
echo $_POST["nome"];
$data = array("nome"=>$_POST("nome"));
$arquivo = fopen("data.json","+w");
fwrite($arquivo,json_encode($data));
fclose($arquivo);
*/


$action = isset($_POST['action'])?$_POST($_POST['action']):'';


if ($action == 'save') {
  
  $contato = formToArray();

  if ($contato['id'] == 0 || $contato['id'] == '') {
    if (insert($contato))
      header('location: index.php');
  } else {
    alterar($contato);
    header('location: index.php');
  }
  

} else {
  # code...
}


?>