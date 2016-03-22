
/* MASCARAS ****************************************************** */
	function mascara(o,f){
		v_obj = o
		v_fun = f
		setTimeout("execmascara()",1)
	}
	function execmascara(){
	    v_obj.value = v_fun(v_obj.value)
	}
	//APENAS NUMEROS
	function mnum(v){
	    v = v.replace(/\D/g,"");
	    return v;
	}
/* *************************************************************** */

function inserirMercadoria() {
	var negociacao = document.getElementById('negociacao')
	var validacao = 0
	var msg = new Array()
	var form = new Array()

	if (negociacao.mercadoria.value == ""){
		msg[validacao] = "Preencha o campo 'Tipo Mercadoria'\n"
		validacao++
	}
	if (negociacao.nome.value == ""){
		msg[validacao] = "Preencha o campo 'Nome Mercadoria'\n"
		validacao++
	}
	if (negociacao.preco.value == ""){
		msg[validacao] = "Preencha o campo 'Preço'\n"
		validacao++
	}
	if (negociacao.quantidade.value == ""){
		msg[validacao] = "Preencha o campo 'Quantidade'\n"
		validacao++
	}
	if (negociacao.negocio.value == ""){
		msg[validacao] = "Escolha um 'Tipo Negócio'"
		validacao++
	}

	if (validacao == 0){
		form[0] = negociacao.mercadoria.value
		form[1] = negociacao.nome.value
		form[2] = negociacao.preco.value
		form[3] = negociacao.quantidade.value
		form[4] = negociacao.negocio.value
		form[5] = negociacao.btn.value
		window.location=("../php/Mercadoria.php?form="+form);
		alert("Salvo com sucesso!!!")
	} else {
		alert(msg);
	}
}