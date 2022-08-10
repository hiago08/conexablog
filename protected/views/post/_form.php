<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'post-form',
	'enableAjaxValidation' => false,
));
?>


	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php //echo $form->labelEx($model,'id_usuario'); ?>
		<?php //echo $form->dropDownList($model, 'id_usuario', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true))); //Alterado?> 
		<?php //echo $form->error($model,'id_usuario'); ?>
		</div><!-- row -->
		<div class="row form-group">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->dropDownList($model, 'id_categoria', GxHtml::listDataEx(Categoria::model()->findAllAttributes(null, true)), array('class'=>'form-control form-control-sm')); //Alterado?> 
		<?php echo $form->error($model,'id_categoria'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('maxlength' => 100, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model, 'texto', array('class'=>'form-control', 'rows'=>'5')); ?>
		<?php echo $form->error($model,'texto'); ?>
		</div><!-- row -->
		<!-- <div class="row">
		<?php //echo $form->labelEx($model,'data'); ?>
		<?php/* $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data',
			'value' => $model->data,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
		; */ ?>
		<?php echo $form->error($model,'data'); ?>
		</div>row -->

<?php
echo GxHtml::submitButton('Save', array('class'=>'btn btn-primary botao'));
$this->endWidget();
?>
</div><!-- form -->