<?php

require "bancodedados.php";

$diretorio = "imagens/";
$imagem = $_FILES["imagem"]["name"];
$caminhocompleto = $diretorio.$imagem;
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];

$salvarimagem = move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhocompleto);

$inserir = mysqli_query($conexao, "INSERT INTO banco(caminhoimagem, nome, idade, curso) VALUES ('$caminhocompleto','$nome', '$idade', '$curso')");

echo "<script>alert('Aluno inserido com sucesso!');</script>";
echo "<script>document.location.href='index.html';</script>";

?>