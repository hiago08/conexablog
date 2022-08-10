<?php

$this->breadcrumbs = array(
	Post::label(2),
	'Index',
);

$this->menu = array(
	array('label'=>'Create' . ' ' . Post::label(), 'url' => array('create')),
	array('label'=>'Manage' . ' ' . Post::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Post::label(2)); ?></h1>

<?php 
	$categorias = Categoria::model()->findAll();
	// var_dump($dataProvider->findAll(array('id_categoria'=>2)));
	// die;
?>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Exibindo todas as categorias
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php foreach ($categorias as $categoria): ?>
    <a class="dropdown-item" href="<?php echo Yii::app()->request->scriptUrl ?>?r=post/index&id_categoria=<?php echo $categoria->id_categoria?>"><?php echo $categoria->nome; ?></a>
  <?php endforeach ?>
  </div>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 