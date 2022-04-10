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
 
function recuperaDia($data): string
{
    $dia = $data->format('d');
    return $dia;
}

function converterEmDias($ano,$mes,$dia) :string {

    $ano = ($ano * 365.25);
    $mes = ($mes * 30);

    $resultado = ($dia + $mes + $ano);
    return $resultado;

}
function calcular($nome,$dia,$mes,$ano,$data,$diaMesAno){
    if (validaNome($nome)and validaDia($dia) and validaMes($mes) and validaAno($ano)){
//        if (validaData($ano,$mes,$dia)){
            removerMsgErro();
            $date = calculaAno($data, $diaMesAno);
            $anos = recuperaAno($date);
            $dias = recuperaDia($date);
            $meses = recuperaMes($date);
            $diasTotais = converterEmDias($anos,$meses,$dias);
            sucesso("Olá $nome, você possui $anos anos, $meses meses e $dias dias de vida! <br>
                Isso da Um total de $diasTotais dias de vida! ");
                return null;
       // }
    }
    else{
        removerMsgSucesso();
        obterMsgErro();
    }
}
 ?>