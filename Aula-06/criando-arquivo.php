<?php
$arquivo = fopen("clientes.txt","w");

$listaClientes = [
    [
        "nome" => "Leandro",
        "idade" => "18"
    ],
    [
        "nome" => "Leonardo",
        "idade" => "19"
    ],
    [
        "nome" => "Anime",
        "idade" => "18"
    ],
    [
        "nome" => "Light",
        "idade" => "17"
    ],
    [
        "nome" => "izuko",
        "idade" => "15"
    ]
];

for($i=0; $i<count($listaClientes); $i++){
    fwrite($arquivo, $listaClientes[$i]["nome"] . "\t\t");
    fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
}

fclose($arquivo);

?>

<a href="clientes.txt" download>Lista de clientes</a> 