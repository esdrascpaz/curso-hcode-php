<?php

/* Chamar a própria função deve ser usado
em cados excepcionais */

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>
        array(
            'nome_cargo'=>'Diretor Comercial',
            'subordinados'=>
            array(
                'nome_cargo'=>'Gerente de Vendas'
            )
        ),
        array(
            'nome_cargo'=>'Diretor Financeiro',
            'subordinados'=>
            array(
                'nome_cargo'=>'Gerente de Contas a Pagar',
                'subordinados'=>
                array(
                    'nome_cargo'=>'Supervisor de Pagamentos'
                )
            ),
            array(
                'nome_cargo'=>'Gerente Compras',
                'subordinados'=>
                array(
                    'nome_cargo'=>'Supervisor de Suprimentos'
                )
            )
        )
    )
);

function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            // Função se chama dentro dela mesma para executar o mesmo processo
            $html .= exibe($cargo['subordinados']);
        }

        $html .= '<\li>';
    }

    $html .= '<\ul>';

    return $html;
}