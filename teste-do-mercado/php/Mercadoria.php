<?php
	require_once "../control/ControleMercadoria.php";
		
	$controleMercadoria = new ControleMercadoria();
	
	$listaMercadorias = array();
	$array = array();
	
	if(isset($_GET['form'])){
		$array = explode(",",  $_GET['form']);
		var_dump($array);

		if ($array[sizeof($array)-1] == "Salvar") {
			$controleMercadoria->inserirMercadoria($array);
			$listaMercadorias =listarMercadorias($controleMercadoria);
		}
	}

	$listaMercadorias = listarMercadorias($controleMercadoria);

	function listarMercadorias($controleMercadoria){
		
		$listaMercadorias = $controleMercadoria->listarMercadorias();

		$i = 0;
		foreach ($listaMercadorias as $item) {
			switch ($item['tipo_negocio']) {
				case 1:
					$item['tipo_negocio'] = "Compra";
					break;
				case 2:
					$item['tipo_negocio'] = "Venda";
					break;
				default:
					$item['tipo_negocio'] = "Não Informado";
					break;
			}
			$listaMercadorias[$i] = $item;
			$i++;
		}

		return $listaMercadorias;
	}
?>