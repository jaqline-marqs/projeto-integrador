<?php

if(isset($_POST['submit']))
{
    //print_r($_POST['nomedobairro1']);
    //print_r($_POST['ocorrencia']);
    //print_r($_POST['nomedobairro2']);
    //print_r($_POST['bairro']);
    //print_r($_POST['animal']);
    //print_r($_POST['ultimo']);
    //print_r($_POST['situacao']);
    //print_r($_POST['comentario']);
    //print_r($_POST['nome']);
    //print_r($_POST['sobrenome']);
    //print_r($_POST['email']);



   include_once("config.php");



 $nossobairro = $_POST['nomedobairro1'];
 $ocorrencia = $_POST['ocorrencia'];
 $bairro = $_POST['nomedobairro2'];
 $precisa = $_POST['bairro'];
 $encontrado = $_POST['animal'];
 $horario = $_POST['ultimo'];
 $animal = $_POST['situacao'];
 $digite = $_POST['comentario']; 
 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $email = $_POST['email'];


 $result= "INSERT INTO informações bairros(nossobairro,ocorrencia,bairro,precisa,encontrado,horario,animal,digite,nome,sobrenome,email) VALUES ('$nomedobairro1', 
 '$ocorrencia', '$nomedobairro2', '$bairro', '$animal', '$ultimo', '$situacao', '$comentario', '$nome', '$sobrenome', '$email')";

 if(mysqli_query($conexao, $result)) 
  {
    echo "Informações enviadas com sucesso";
 }
 else{
    echo "Erro".mysqli_connect_error($conexao);
 }
  mysqli_close($conexao);


}
?>
