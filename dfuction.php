<?php

class Carro 
{
public $model;
public $estadoDoVeiculo;
public $cor;
public $anoDoVeiculo;
public $numeracaoDoEmplacamento;

Public function comprei()
 {
  echo "Eu comprei um Carro do modelo{$this -> model}, ele estava {$this -> estadoDoVeiculo}, na cor {$this -> cor}, 
  o Carro era do ano de {$this -> anoDoVeiculo}. A numeração da placa do meu Carro é {$this -> numeracaoDoEmplacamento} <br>";
 } 
 Public function vendi()
 {
    echo "Eu anunciei um Carro do modelo{$this -> model}, ele estava {$this -> estadoDoVeiculo}, na cor {$this -> cor}, 
    o Carro era do ano de {$this -> anoDoVeiculo}. A numeração da placa do Carro era {$this -> numeracaoDoEmplacamento} <br>";
    
 }
 Public function recomprei()
 {
    echo "Eu achei um Carro pra comprar no modelo{$this -> model}, ele estava {$this -> estadoDoVeiculo}, na cor {$this -> cor}, 
    o Carro era do ano de {$this -> anoDoVeiculo}. A numeração da placa do Carro era {$this -> numeracaoDoEmplacamento} <br>";
 }
}

$comprei1 = new Carro();
$comprei1->model = "McLArem"; 
$comprei1 ->estadoDoVeiculo = "Novo";
$comprei1->cor = "Branco";
$comprei1->anoDoVeiculo = 2020;
$comprei1->numeracaoDoEmplacamento = 37371;
$comprei1->comprei();

$comprei1 = new Carro();
$comprei1->model = "McLArem"; 
$comprei1 ->estadoDoVeiculo = "Novo";
$comprei1->cor = "Branco";
$comprei1->anoDoVeiculo = 2020;
$comprei1->numeracaoDoEmplacamento = 37371;
$comprei1->vendi();

$comprei1 = new Carro();
$comprei1->model = "McLArem"; 
$comprei1 ->estadoDoVeiculo = "velho";
$comprei1->cor = "Branco";
$comprei1->anoDoVeiculo = 2020;
$comprei1->numeracaoDoEmplacamento = 37371;
$comprei1->recomprei();


echo "============================================================================================================================================";


class Escola 
{
public $nomeDaEscola;
public $local;
public $corDoUniforme;
public $materias;
public $ranking;

Public function inicio()
 {
  echo "Eu me matriculei na {$this -> nomeDaEscola}, que fica localizada na {$this -> local}, a cor do uniforme da escola é: {$this -> corDoUniforme}, 
  ela tem um total de {$this -> materias} materias, Essa escola esta no ranking  {$this -> ranking} das melhores escola do bairro <br>";
 } 
 Public function nivelDeEstudo()
 {
    echo "Eu estudo na {$this -> nomeDaEscola}, que fica localizada na {$this -> local},a cor do uniforme e muito bonita que é {$this -> corDoUniforme}, 
  no total ela tem {$this -> materias} materias, Essa escola esta no ranking  {$this -> ranking} das melhores escola do bairro <br>";
    
 }
 Public function recomprei()
 {
    echo "Eu estou formando na {$this -> nomeDaEscola}, que fica localizada na {$this -> local}, a cor do uniforme da escola é: {$this -> corDoUniforme}, 
    ela tem um total de {$this -> materias} materias, Essa escola esta no ranking  {$this -> ranking} das melhores escola do bairro <br>";
 }
}

$escola = new Escola();
$escola->local = "Novo Horizonte"; 
$escola->nomeDaEscola = "Sandoval soares"; 
$escola->materias = 13;
$escola->corDoUniforme = "lilas";
$escola->ranking = 1;
$escola->inicio();


$escola->local = "Novo Horizonte"; 
$escola->nomeDaEscola = "Sandoval soares"; 
$escola->materias = 13;
$escola->corDoUniforme = "lilas";
$escola->ranking = 1;
$escola->nivelDeEstudo();

$escola->local = "Novo Horizonte"; 
$escola->nomeDaEscola = "Sandoval soares"; 
$escola->materias = 13;
$escola->corDoUniforme = "lilas";
$escola->ranking = 1;
$escola->recomprei();