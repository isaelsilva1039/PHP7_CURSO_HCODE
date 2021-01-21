<?php

$hierarquia = array(

        array(
            'nome_cargo'=>'CEO',
            'subordinado'=>array(
                array(
                    'nome_carrgo'=>'Diretor Comercial',
                    'subordinado'=>array(
                        array(
                            'nome_cargo'=>'Gerente de Vendas',
                            'subordinado'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor'
                                )
                             )
                          )
                       ),
                    array(
                        'nome_cargo'=>'Diretor Contas a pagar',
                        'subordinado'=>array(
                            array(
                                'nome_cargo'=>'Geerente de contas a pagar ',
                                'subordinado'=>array(
                                    array(
                                        'nome_cargo'=>'Supervisor De contas a pagar',
                                        'subordinado'=>array(
                                            array(
                                                'nome_cargo'=>'Assistente Administrativo'
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )


);

function exibir($cargos){

    $html = '<ul>';
    foreach ($cargos as $cargo){
         $html .= '<li>';

         $html .=['nome_cargo'];
if(isset($cargo['subordinado']) && count($cargo['subordinado']) ){

    $html .= exibir($cargo['subordinado']);
    
    }

    $html .= '</li>';

    }

    $html .= '</ul>';

    return $html;
}

exibir($hierarquia);
