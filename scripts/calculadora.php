<?php

function calculaAno($data,$diaMesAno):DateTime{

    $intervalo = new DateInterval("$diaMesAno");

    $data ->sub($intervalo);

    return $data;
    
}

function recuperaAno($data) :string
{
    $ano = $data->format('y');
    return $ano;
}
function recuperaMes($data):string
{
    $mes = $data->format('m');
    return $mes;
}
 
function recuperaDia($data)
{
    $dia = $data->format('d');
    return $dia;
}

 ?>