<div class="row mb-3">
	<div class="col">
		<div class="card shadow-sm">
			<div class="card-body">
				<h5 class="card-title"><?php echo $data->titulo; ?></h5>
				<h6><?php echo $data->categoria->nome?></h6>
				<div class="flex-row">
					<h6 class="d-inline-flex card-subtile text-muted">Autor: <?php echo $data->usuario->nome; ?></h6>
					<h6 class="d-inline-flex px-2 card-subtile text-muted">Data: <?php echo $data->formatDate('d/m/Y'); ?></h6>
				</div>
				<p class="card-text resumo"><?php echo $data->texto; ?></p>
				<a href="<?php echo $data->getUrl(); ?>" class="card-link">Ver post</a>
			</div>
		</div>
	</div>
</div>
