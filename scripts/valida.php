<?php

function validaNome($nome):bool{
    if (empty($nome)){
        erros("Erro! o Nome não pode ser vázio.");
        return false;
    }
    elseif(strlen($nome)>30){
        erros("Erro! O nome não pode conter mais do que 30 caracteres");
        return false;
    }
    elseif(strlen($nome)<3){
        erros("Erro! o nome deve conter ao menos 3 caracteres");
        return false;
    }
    return true;
}
function validaDia($dia):bool{
    if (empty($dia)){
        erros("Erro! o Dia não pode estar vázio.");
        return false;
    }
    elseif(!is_numeric($dia)){
        erros("Apenas digitos numéricos.");
        return false;
    }
    elseif($dia >= 32){
        erros("O Dia não pode ser maior do que 31.");
        return false;
    }
    elseif($dia <= 0){
        erros("O Dia não pode ser menor do que 1.");
        return false;
    }
    return true;    
}

function validaMes($mes):bool{
    if (empty($mes)){
        erros("Erro! o Mes não pode estar vázio.");
        return false;
    }
    elseif(!is_numeric($mes)){
        erros("Insira o mês em numero.");
    }
    elseif($mes > 12){
        erros("O Mes não pode ser maior do que 12.");
        return false;
    }
    elseif($mes <= 0){
        erros("O Mes não pode ser menor do que 1.");
        return false;
    }
    return true;    
}
function validaAno($ano):bool{
    $dataAtualAno = new DateTime();
    $anoAtualAno = $dataAtualAno->format('Y');
    
    if (empty($ano)){
        erros("Erro! o Ano não pode estar vázio.");
        return false;
    }
    elseif(!is_numeric($ano)){
        erros("Apenas digitos numéricos. Exemplo: '1998'");
        return false;
    }
    elseif($ano > $anoAtualAno){
        
        erros("O ano não pode ser maior do que o ano Atual");
        return false;
    }
    elseif($ano <= 1900){
        erros("O ano não pode ser menor do que 1900.<br>
        O ano deve estar no formato de 4 digitos, Exemplo: '1998'");
        return false;
    }
    return true;
    
function validaData($diaMesAno):bool{
    $data = new DateInterval("$diaMesAno");
    $dataAtual = new DateTime();
    if($data > $dataAtual){
        erros("A data informada não pode ser maior do que a data atual.");
        return false;
    }
    return true;
}
}