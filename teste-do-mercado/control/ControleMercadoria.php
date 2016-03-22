<?php 
require_once "../dao/MercadoriaDao.php";
require_once "../model/Mercadoria.php";

class ControleMercadoria {

	public function inserirMercadoria($array){
		$mercadoria = new Mercadoria();
		$mDao = new MercadoriaDao();
		$mercadoria->setTipoMercadoria($array[0]);
		$mercadoria->setNome($array[1]);
		$mercadoria->setQuantidade($array[2]);
		$mercadoria->setPreco($array[3]);
		$mercadoria->setTipoNegocio($array[4]);
		try {
			$mDao->inserirMercadoria($mercadoria);
		} catch (Exception $e) {
			
		}
	}

	public function listarMercadorias(){
		$mDao = new MercadoriaDao();
		$lista = array();
		try {
			$lista = $mDao->listarMercadorias();
		} catch (Exception $e) {
			
		}
		return $lista;
	}
}

?>