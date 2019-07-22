<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'sumordinados' => array(
                    // Inicio: Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    // Fim: Gerente de vendas
                )
            ),
            // Fim: Diretor Comercial

            // Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Inicio: Gerente de contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a Pagar',
                        'subordinados' => array(
                            // Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo' => 'supervisor de Pagamentos'
                            )
                            // fim: Supervisor de pagamentos
                        )
                          // Fim: Gerente de contas a Pagar
                    ),
                    // Fim: Gerente de contas a Pagar
                    // Inicio: Gereten de compras
                    array(
                        'nome_cargo' => 'Gerente de compas',
                        'subordinados' => array(
                            // Inicio: supervisor de suplementos
                            array(
                                'nome_cargo' => 'supervisor de suplementos',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Peão'
                                    )
                                )
                            )
                            // Fim: supervisor de suplementos
                        )
                    )
                    // Fim: Gereten de compras
                )
            )
            // Fim: Diretor Financeiro        
        )
    )
);

function exibe($cargos){

    $html = "<ul>";

    foreach($cargos as $cargo){

        $html .= "<li>";
        
        $html .= $cargo['nome_cargo'];
        

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";
    
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);

