<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

if (!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>'Exibir' . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>'Criar um novo' . ' ' . $model->label(), 'url'=>array('create')),
		array('label'=>'Atualizar' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_post), 'visible'=>Yii::app()->user->id == $model->id_usuario),
		array('label'=>'Deletar' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_post), 'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->id == $model->id_usuario),
		// array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
	);
}
?>

<section class="container container-fluid">

	<h1><?php echo $model->titulo?></h1>
	<h6>Categoria: <?php echo $model->categoria->nome?></h6>
	<div class="flex-row">
		<h6 class="d-inline-flex text-muted">Autor: <?php echo $model->usuario->nome; ?></h6>
		<h6 class="d-inline-flex px-2 text-muted">Data: <?php echo $model->formatDate('d/m/Y'); ?></h6>
	</div>
	<hr>
	<p><?php echo $model->texto?></p>
	
	<div>
		<h5>Escreva um comentário</h5>
		<?php
			if(!Yii::app()->user->isGuest){
				$comentario = Comentario::model();
				$this->renderPartial('//comentario/_form', array(
					'model' => $comentario,
					'idPost' => $model->id_post,
				));
			}else{
				echo 'Para escrever um comentário, você deve estar logado';
			}
		?>
	
		<?php if(!empty($model->comentarios)):?>
			<?php foreach ($model->comentarios as $comentario): ?>
				<div class="card mb-3 shadow-sm" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-3">
							<img class="justify-content-center p-3" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/User.svg" alt="...">
						</div>
						<div class="col-md-9">
							<div class="card-body">
								<h5 class="card-title"><?php echo $comentario->usuario->nome?></h5>
								<p class="card-text"><?php echo $comentario->texto?></p>
								<p class="card-text"><small class="text-muted"><?php echo $comentario->data?></small></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<h6>Não há comentarios nessa publicação</h6>
		<?php endif ?>
	
			<!-- // $dadosProvider =  $this->loadModel($model);
			// var_dump($dadosProvider);
			// $this->render('//comentario/view'); -->
	
		
	</div>
</section>


<?php //$this->widget('zii.widgets.CDetailView', array(
	// 'data' => $model,
	// 'attributes' => array(
	// 'id_post',
	// 'titulo',
	// 'texto',
	// 'data',
	// ),
// )); ?>

