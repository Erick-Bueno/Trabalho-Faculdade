<?php 
include("conexao.php");
if(isset($_POST['criar'])){
    if (!empty($_POST['Nome']) || !empty($_POST['Densidade']) || !empty($_POST['Rejeitada']) || !empty($_POST['Nivel']) || !empty($_POST['classificacao']) ) {
        $Nome = $_POST['Nome'];
        $Densidade = $_POST['Densidade'];
        $Rejeitada = $_POST['Rejeitada'];
        $Nivel = $_POST['Nivel'];
        $Classificacao = $_POST['classificacao'];
        
        $sqlQueryText = "INSERT INTO sigma (Nome, Densidade_Muscular, Mulheres_Rejeitadas, nivel_de_frieza,Classificacao) VALUES ('$Nome', '$Densidade', '$Rejeitada', '$Nivel', '$Classificacao')";
        $Query = $mysqli -> query($sqlQueryText) or die("erro ao adicionar sigma");
        header("location: home.php");

      
      
    }
}


$comando = "SELECT Nome, Densidade_Muscular, Mulheres_Rejeitadas, nivel_de_frieza, Classificacao FROM sigma";
$enviar = $mysqli->query($comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC)
?>