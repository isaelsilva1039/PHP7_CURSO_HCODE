<?php 

class BiaxaEstoqeu {

   public $descricao;
   public $estoque;
   public $preco;

    //aumentar extoque 
   public function aumentarEstoque($unidade){

       if(is_numeric($unidade) and $unidade >=0){
           
            $this->estoque += $unidade;
       }else{
         
           echo "Erro, .$unidade. Unidade menor que zero";
           
       }
   }

    //baixa estoque
   public function baixaEstoque($unidade){
        
        if(is_numeric($unidade) and $unidade >= 0){
            $this->estoque -= $unidade;
        }else{
     
             echo" quantidade exece, nã pode da baixa.";
        }
   }

    //regularizar preço
   public function regularixarPreco($percentual){
      
       if(is_numeric($percentual) and $percentual >= 0){
        
           $this->preco *=(1+ $percentual/100);

      }
    }


    public function mostra(){
         
        echo $this->descricao;echo"<br>";
        echo $this->estoque;;echo"<br>";
        echo $this->preco;echo"<br>";
    }

}


$Objeto = new BiaxaEstoqeu();
$Objeto->descricao= "Cafe";
$Objeto->estoque=0;
$Objeto->preco=1;
$Objeto->aumentarEstoque(50);
$Objeto->baixaEstoque(10);
$Objeto->regularixarPreco(20);
$Objeto->mostra();


