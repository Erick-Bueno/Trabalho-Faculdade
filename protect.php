<?php 
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("Vai logar vagabundo. <p><a href=\"index.php\">Logar</a></p>:");
}

?>