<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_comentario')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_comentario), array('view', 'id' => $data->id_comentario)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('post')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->post->titulo)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('id_usuario')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->usuario->nome)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('texto')); ?>:
	<?php echo GxHtml::encode($data->texto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data')); ?>:
	<?php echo GxHtml::encode($data->data); ?>
	<br />

</div>