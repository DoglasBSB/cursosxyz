<?php

echo '<h2>Aula 09 - Função <small><text style="color:#E14F22">  #_Função Recursiva_# </text></small></h2>';


$hierarquia = array(

        array(
            'nome_cargo'=>'CEO',
            'subordinados' => array (
                //Inicío: Diretor comercial
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinados'=>array (
                        //Inicío: Gerente de vendas
                        array(
                            'nome_cargo'=>'Gerente de Vendas',
                        )
                        //Término: Gerente de vendas
                    )
                ),
                //Término: Diretor comercial
                //Inicío: Diretor financeiro
                array(
                    'nome_cargo'=>'Diretor Financeiro',
                    'subordinados'=>array(
                        //Início: Gerente de contas a pagar
                        array(
                            'nome_cargo'=>'Gerente de contas a pagar',
                            'subordinados'=>array(
                                //Início: Supervisor de pagamentos
                                array(
                                    'nome_cargo'=>'Supervidor de Pagamentos',
                                )
                                //Término: Supervisor de pagamentos
                            )
                                ),
                        //Término: Gerente de contas a pagar
                        //Início: Gerente de compras
                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=>array(
                                //Início: Supervisor de suprimentos
                                array(
                                    'nome_cargo'=>'supervisor de Suprimentos',
                                    'subordinados'=>array(
                                        //Início: Fincionario
                                        array(
                                            'nome_cargo'=>'Funcionario'
                                        )
                                        //Término: Fincionario
                                    )
                                )
                                // Término: Supervisor de suprimentos
                            )
                        )
                        //Término: Gerente de compras
                    )
                )
                //Término: Diretor financeiro

            )
        )

);

function exibe($cargos){

        $html = '<ul>';

            foreach ($cargos as $cargo) {
            
                $html .= "<li>";

                $html .= $cargo['nome_cargo'];
                    // verifica se a chave subordinados foi definida e sem dentro do surbordinado tem mais de 0 itens
                    if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                        // chama a função novamente de fora recursiva passando a variavel $cargos com a chave subordinados "que e uma lista de cargos"
                        $html .= exibe($cargo['subordinados']);

                    }

                $html .= "</li>";
            }

        $html .= "</ul>";

        return $html;
}

echo exibe($hierarquia); 

?>