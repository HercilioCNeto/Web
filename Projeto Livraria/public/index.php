<?php 
	$acao='recuperarTarefasPendentes';
	require 'tarefa_controller.php';
 ?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Todo List</title>

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<script type="text/javascript">
			function editar(id, txt_tarefa) {
				//edit form
				let form = document.createElement('form');
				form.action = 'index.php?pag=index&acao=atualizar';
				form.method = 'post';
				form.className = 'row';
				//input
				let inputTarefa = document.createElement('input');
				inputTarefa.type = 'text';
				inputTarefa.name = 'tarefa';
				inputTarefa.className = 'col-9 form-control';
				inputTarefa	.value = txt_tarefa;

				//hidden input to save id
				let inputId = document.createElement('input');
				inputId.type = 'hidden';
				inputId.name = 'id';
				inputId.value = id;

				//button
				let button = document.createElement('button');
				button.type = 'submit';
				button.className = 'col-3 btn btn-info';
				button.innerHTML = 'Atualizar';

				//include inputTarefa at the form
				form.appendChild(inputTarefa);

				//include inputId at the form
				form.appendChild(inputId);

				//include button at the form
				form.appendChild(button);

				//select div tarefa
				let tarefa = document.getElementById('tarefa_'+id);

				//clean text from form
				tarefa.innerHTML = '';

				//include form
				tarefa.insertBefore(form, tarefa[0]);

			}

				function remover(id) {
					location.href = 'index.php?pag=index&acao=remover&id='+id;
				}

				function marcarRealizada(id) {
					location.href = 'index.php?pag=index&acao=marcarRealizada&id='+id;
				}
		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Todo List
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active"><a href="#">Pending Todo</a></li>
						<li class="list-group-item"><a href="nova_tarefa.php">Create Todo</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">All Todo</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container page">
						<div class="row">
							<div class="col">
								<h4>Pending Todo</h4>
								<hr />

								<? foreach ($tarefas as $indice => $tarefa) { ?>	
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
											<?= $tarefa->tarefa ?>
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
											<i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i> 
											<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
										</div>
									</div>
								<? } ?>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>