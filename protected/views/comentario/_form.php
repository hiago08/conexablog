<div class="form">

	<?php 
		if(!isset($idComentario)){
			$idComentario = null;
		}
	?>

	<?php $form = $this->beginWidget('GxActiveForm', array(
		'id' => 'comentario-form',
		'enableAjaxValidation' => false,
		'action' => array('comentario/'.$acao.$idComentario),
	));
	?>

	<p class="note">
		Campos com <span class="required">*</span> são obrigatórios.
	</p>

	<div class="container comentario-container justify-content-center">
		<?php echo $form->errorSummary($model); ?>
	

		<?php echo $form->hiddenField($model, 'id_post', array('class'=>'form-control', 'value'=>$idPost)); ?>


		<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textField($model, 'texto', array('maxlength' => 255, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'texto'); ?>
		</div><!-- row -->

	</div>	

	<?php
	echo GxHtml::submitButton('Save', array('class'=>'btn btn-primary'));
	$this->endWidget();
	?>
</div><!-- form -->