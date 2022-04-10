<?php

include ('scripts/calculadora.php');
include ('scripts/erros.php');
include ('scripts/valida.php');

$nome = $_POST['nome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$diaMesAno = ('P'.$ano.'Y'.$mes.'M'.$dia.'D');
$data = new DateTime();
//$intervalo = new DateInterval('P'.$ano.'Y'.$mes.'M'.$dia.'D');

calcular($nome,$dia,$mes,$ano,$data,$diaMesAno);

header('Location:index.php');
?>
