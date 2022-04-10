<?php
session_start();


function erros(string $menssagem) : void {
    
    $_SESSION['erro'] = $menssagem ; 
    
}

function obterMsgErro() : ?string {
    if(isset($_SESSION['erro']))
        return $_SESSION['erro'];
    return null;
}

function sucesso(string $menssagem):void {

    $_SESSION['sucesso'] = $menssagem;

}

function obterMsgSucesso() :?string {
    if(isset($_SESSION['sucesso']))
        return $_SESSION['sucesso'];
    return null;
}

function removerMsgErro() : void {
    if (isset($_SESSION['erro']))
        unset($_SESSION['erro']);

}

function removerMsgSucesso() : void {
    if(isset($_SESSION['sucesso'])){
        unset($_SESSION['sucesso']);}
}
