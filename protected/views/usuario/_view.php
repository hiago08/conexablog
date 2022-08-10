<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_usuario')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_usuario), array('view', 'id' => $data->id_usuario)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('senha')); ?>:
	<?php echo GxHtml::encode($data->senha); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('coworking')); ?>:
	<?php echo GxHtml::encode($data->coworking); ?>
	<br />

</div>