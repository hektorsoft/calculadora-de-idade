<?php

include ('scripts/calculadora.php');

$nome = $_POST['nome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$diaMesAno = ('P'.$ano.'Y'.$mes.'M'.$dia.'D');
$data = new DateTime();
//$intervalo = new DateInterval('P'.$ano.'Y'.$mes.'M'.$dia.'D');


$date = calculaAno($data, $diaMesAno);
$anos = recuperaAno($date);
$dias = recuperaDia($date);
$meses = recuperaMes($date);

?>

<h2><p>Olá <?php echo $nome ?>!</p></h2>
<p></p>
<h3><p>Você possui <?php echo $anos ?> anos, <?php echo $meses ?> meses e <?php echo $dias ?> dias de vida!</p></h3>
