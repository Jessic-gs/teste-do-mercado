<?php 

class Mercadoria {
	private $codigo;
	private $tipoMercadoria;
	private $nome;
	private $quantidade;
	private $preco;
	private $tipoNegocio; // 1 - Compra; 2 - Venda

	function __construct(){
		$this->codigo = 0;
		$this->tipoMercadoria = "";
		$this->nome = $nome = "";
		$this->quantidade = 0;
		$this->preco = 0.0;
		$this->tipoNegocio = 0;
	}

	//Codigo
	public function getCodigo() {
	    return $this->codigo;
	}
	public function setCodigo($codigo) {
	    return $this->codigo = $codigo;
	}
	
	//TipoMercadoria
	public function getTipoMercadoria() {
	    return $this->tipoMercadoria;
	}
	public function setTipoMercadoria($tipoMercadoria) {
	    return $this->tipoMercadoria = $tipoMercadoria;
	}
	
	//Nome
	public function getNome() {
	    return $this->nome;
	}
	public function setNome($nome) {
	    return $this->nome = $nome;
	}
	
	//Quantidade
	public function getQuantidade() {
	    return $this->quantidade;
	}
	public function setQuantidade($quantidade) {
	    return $this->quantidade = $quantidade;
	}
	
	//Preco
	public function getPreco() {
	    return $this->preco;
	}
	public function setPreco($preco) {
	    return $this->preco = $preco;
	}
	
	//TipoNegocio
	public function getTipoNegocio() {
	    return $this->tipoNegocio;
	}
	public function setTipoNegocio($tipoNegocio) {
	    return $this->tipoNegocio = $tipoNegocio;
	}	

}

?>