<?php


class Banco{
    
    private $saldo;
    private $entrada;
    private $saida;

    public function getSaida(){
        return $this->saida;

    }

    public function setSaida($saida){
        
        $this->saida = $saida;
    
    }

    
    public function getEntrada(){
        
        return $this->entrada;
        
    }

    public function setEntrada($entrada){

        $this->entrada=$entrada;

    }

    
    public function getSaldo(){

        return $this->saldo;

    }

    public function setSaldo($saldo){

        $this->saldo=$saldo;
   
    }

    public function validacaoEstoque(){
        if($this->getSaida()<0){
            echo "Erro ao da saida Do estoque";
            exit;
        }
    }
    public function resultadoContaBancaria(){
        

        $Movimentacao = array(
            "Estoque Inicial"=>$this->getSaldo(),
            "entrada" =>$this->getEntrada(),
            "saida"   =>$this->getSaida(),
            "Estoque"=>$this->getSaldo()+ $this->getEntrada()-$this->getSaida()
        );
       
         return $Movimentacao;
    }

}

$ContaBnacoBrasil = new Banco();
$ContaBnacoBrasil->setSaldo("100");
$ContaBnacoBrasil->setEntrada("100");
$ContaBnacoBrasil->setSaida("100");
print_r($ContaBnacoBrasil->resultadoContaBancaria());