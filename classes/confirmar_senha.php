<?php

//Conexão
required_once "classes/site.class.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
//busca no db o usuario com o email
$result = pg_query("SELECT * FROM cuidador WHERE email='$email'");

$num_rows = pg_num_rows($result);

if($num_rows=='1'){

while($Row_email = pg_fetch_array($result)){
$rowemail = $Row_email['email'];
$rowsenha = $Row_email['senha'];
}


$mensage ="Você solicitou a recuperação de senhha confira seu dados.";
$mensage .="E-mail= " . $rowemail;
$mensage .="Senha:" . $rowsenha;
mail($rowemail, "Ampola Comunicações, recuperação de senha", $mensage);

echo"<script>alert(Sua senha foi enviada para o e-mail indicado.)</script>";


}else{
echo"<script>alert('E-mail não cadastrado em nosso sistema')</script>";

}


?>