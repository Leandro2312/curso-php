<?php
$usuario = $_POST['leandro'];
$senha = $_POST['123'];

if ($senha == 123 && $usuario == 'leandro'){
    header('Location: painel.php');
}else{
    header('Location: usuario-invalido.php');
}
?>