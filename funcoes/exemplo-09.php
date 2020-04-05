<?php

// funções recursivas

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio: Gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //Termino: Gerente de vendas
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio: Supervidor de Pagamento 
                            array(
                                'nome_cargo'=>'Supervidor de Pagamento'
                            )
                            //Termino: Supervidor de Pagamento
                        )
                    ),
                    //Termino: Gerente de contas a pagar
                    //Inicio:  Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'=>array(
                            //Inicio: Supervidor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervidor de Suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionário'
                                    )
                                )
                            )
                        )
                        //Termino: Supervidor de Suprimentos
                    )
                    //Termino:  Gerente de compras
               )
            )
        )
       //Termino: Diretor Financeiro
    )
);

function exibe($cargos){

    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);
        }

        $html .="</li>";
    }

    $html .="</ul>";

    return $html;
}

echo exibe($hierarquia);


?>