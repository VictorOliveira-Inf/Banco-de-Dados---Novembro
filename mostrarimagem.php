<?php

require "bancodedados.php";

$selecionar = mysqli_query($conexao,"SELECT * FROM banco");

while ($busca = mysqli_fetch_array ($selecionar)){

$caminhoimagem = $busca['caminhoimagem'];
$nome = $busca['nome'];
$idade = $busca['idade'];
$curso = $busca['curso'];

echo '<img src="'.$caminhoimagem.'" width="200px"/><br/>

nome: '.$nome.' <br/> <br/>
idade: '.$idade.' <br/> <br/>
curso: '.$curso.' <br/> <br/>';

}


?>
<p><a href="index.html">Voltar</a></p>