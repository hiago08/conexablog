<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_comentario)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_comentario), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<!-- <h1><?php// echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1> -->

<h1><?php echo $model->post->titulo ?></h1>

<div class="card mb-3 shadow-sm" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img class="justify-content-center p-3" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/User.svg" alt="...">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title"><?php echo $model->usuario->nome?></h5>
        <p class="card-text"><?php echo $model->texto?></p>
        <p class="card-text"><small class="text-muted"><?php echo $model->data?></small></p>
      </div>
    </div>
  </div>
</div>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_comentario',
array(
			'name' => '',
			'type' => 'raw',
			'value' => $model->id_post !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->id_post)), array('/view', 'id' => GxActiveRecord::extractPkValue($model->id_post, true))) : null,
			),
array(
			'name' => '',
			'type' => 'raw',
			'value' => $model->id_usuario !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->id_usuario)), array('/view', 'id' => GxActiveRecord::extractPkValue($model->id_usuario, true))) : null,
			),
'texto',
'data',
	),
)); ?>*/

