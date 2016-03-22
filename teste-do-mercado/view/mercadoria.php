<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
	    <link href="../css/estilo.css" rel="stylesheet">
		<script src="../js/validacao.js"></script>
		<title>Negociação</title>
	</head>
	<body>
		<?php include '../php/Mercadoria.php'; ?>

		<div class="container">
			<div class="page-header">
				<h2>Negociação de Mercodorias</h2>
			</div>
			<form class="form-horizontal" method="post" action="" id="negociacao">
				<div class="control-group">
					<label class="control-label">Tipo Mercadoria:</label>
					<div class="controls">
						<input type="text" class="span4" name="mercadoria" maxlength="50">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nome da Mercadoria:</label>
					<div class="controls">
						<input type="text" class="span4" name="nome" maxlength="30">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Quantidade:</label>
					<div class="controls">
						<input type="text" class="span2" name="quantidade" onkeyup="mascara(this, mnum);" maxlength="6">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Preço:</label>
					<div class="controls">
						<input type="text" class="span2" name="preco">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Tipo de Negócio:</label>
					<div class="controls">
						<label class="radio inline"><input type="radio" name="negocio" value="1">Compra</label>
						<label class="radio inline"><input type="radio" name="negocio" value="2">Venda</label>
					</div>
				</div>
				<div align="right">
					<button name="btn" class="btn" onclick="inserirMercadoria()" value="Salvar">Salvar</button>
				</div>
			</form>

			<div class="page-header">
				<h2>Mercadorias</h2>
			</div>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Tipo Mercadoria</th>
						<th>Nome Mercadoria</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Tipo Negócio</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($listaMercadorias as $item): ?>
						<tr>
							<td><?php echo $item['tipo_mercadoria'] ?></td>
							<td><?php echo $item['nome'] ?></td>
							<td><?php echo $item['quantidade'] ?></td>
							<td><?php echo $item['preco'] ?></td>
							<td><?php echo $item['tipo_negocio'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</body>
</html>