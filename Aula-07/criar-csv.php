<?php
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Leandro",18,"Santa Bárbara"],
    ["Bábara Jhonson",40,"Americana"]
);

$arquivo = fopen("dados.csv", "a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");
}

fclose($arquivo);
?>
