<?php

$titulos = ['Titulo 1','Titulo 2','Titulo 3'];
$descricao = ['Descrição 1','Descrição 2','Descrição3'];

for($i= 0;$i < count($titulos);$i++ ){
    echo $titulos[$i] . "<br>";
    echo $descricao[$i] . "<br>"; 
    echo "<br><br>";
}

echo "<a href='gerar-pdf.php'>Gerar PDF</a>"


?>