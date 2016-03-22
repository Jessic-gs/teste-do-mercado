<?php
require_once 'ResourceManager.class.php';
require_once "IMercadoriaDao.php";

class MercadoriaDAO implements IMercadoriaDao {
	// PERSISTIR NO BANCO
	public function inserirMercadoria($mercadoria){
		$sql = "insert into mercadoria(nome, tipo_mercadoria, preco, quantidade, tipo_negocio)
							   values (:nome, :tipo_mercadoria, :preco, :quantidade, :tipo_negocio)";
		$connection = ResourceManager::getConnection();
		try {
			$connection->beginTransaction();
	        $prepare = $connection->prepare($sql);
	        $prepare->bindValue(":nome", $mercadoria->getNome());
	        $prepare->bindValue(":tipo_mercadoria", $mercadoria->getTipoMercadoria());
	        $prepare->bindValue(":preco", $mercadoria->getPreco());
	        $prepare->bindValue(":quantidade", $mercadoria->getQuantidade());
	        $prepare->bindValue(":tipo_negocio", $mercadoria->getTipoNegocio());
			$prepare->execute();
	        $connection->commit();
	    } catch (Exception $ex) {
	    	$erro = "Não pode ser inserido corretamente";
	        throw new Exception($erro);
	    }
	    $connection = null;
	}

	// LISTAR TODAS AS PESISTENCIAS
	public function listarMercadorias(){
		$sql = "select codigo, nome, tipo_mercadoria, preco, quantidade, tipo_negocio
				from mercadoria";
	    
	    $connection = ResourceManager::getConnection();
		$lista = array();
	 	
	 	try{
	        $connection->beginTransaction();
	        $prepare = $connection->prepare($sql);
	        $prepare->execute();
	        while ($linha = $prepare->fetch(PDO::FETCH_OBJ)){
				$item = array();
					$item['codigo'] = $linha->codigo;
	        		$item['nome'] = $linha->nome;
	        		$item['tipo_mercadoria'] = $linha->tipo_mercadoria;
	        		$item['preco'] = $linha->preco;
	        		$item['quantidade'] = $linha->quantidade;
	        		$item['tipo_negocio'] = $linha->tipo_negocio;
	        	$lista[] = $item;
	        }
	        $connection->commit();
	    } catch (Exception $ex) {
	        $erro = "Os Cursos Ativos não podem ser listado";
	        throw new Exception($erro);
	    }
	    $connection = null;
	    return $lista;
	}
}


?>