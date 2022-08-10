<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'usuario-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Campos com <span class="required">*</span> são obrigatórios.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 80, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model, 'senha', array('maxlength' => 60, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'senha'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'coworking'); ?>
		<?php echo $form->textField($model, 'coworking', array('maxlength' => 100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'coworking'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save', array('class'=>'btn btn-primary botao'));
$this->endWidget();
?>
</div><!-- form -->