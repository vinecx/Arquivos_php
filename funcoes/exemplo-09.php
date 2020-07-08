<?php 

$hiearquia = array(
array(
	'nome_cargo' => "CEO",
	'subordinados' => array(
		//Inicio; Diretor comercial
		array(
			'nome_cargo' => 'Diretor Comercial',
			'subordinados'=>array(
				//Inicio; Gerente de Vendas
				array('nome_cargo'=>'Gerente de Vendas')
			),
			// Termino; Gerente de Vendas
		),// Termino; Diretor Comercial
	

		// Inicio; Diretor Financeiro
		array(
			'nome_cargo' => 'Diretor Financeiro',
			'subordinados'=>array(
				// Inicio Gerente de compras a pagar
				array(
			     'nome_cargo'=>'Gerente de Contas a Pagar',
				'subordinados'=>array(
					// Inicio de supervisor de Pagamentos
					array('nome_cargo'=>'Supervisor de Pagamentos')
					// Termino de Supervisor de pagamentos
					)
			),// Termino; Gerente de Contas a pagar


			// Inicio; Gerente de Compras e Subordinados
			array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
					// Inicio; Supervisor de Suprimentos
					array(
						'nome_cargo'=>'Supervisor de Suprimentos'
					) // Termino; Supervisor de Suprimentos
				)
			),// Termino; Gerente de Compras
		),//Termino Diretor Financeiro
	),// Termino; Diretor Comercial
		)
		)
);

function exibe($cargos){

			$html = '<ul>';
			foreach ($cargos as $cargo) {
				$html .= "<li>";

				$html .= $cargo['nome_cargo'];

				if(isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0){

							$html .= exibe($cargo['subordinados']);

				}

				$html .= "</li>";

				
			}



			$html .= '</ul>';

			return $html;
}

echo exibe($hiearquia);

?>