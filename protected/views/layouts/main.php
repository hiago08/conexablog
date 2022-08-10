<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container-fluid m-0 p-0 border-0" id="page">

	<header id="header border-0">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo Yii::app()->request->scriptUrl ?>/site/index.php" >
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/logo.svg"/>
				<span class="text-logo"><?php echo CHtml::encode(Yii::app()->name); ?></span>
			</a>
			<div class="collapse navbar-collapse justify-content-end">
			<?php $this->widget('zii.widgets.CMenu',array(
				'itemCssClass'=>'nav-item mx-2',
				'htmlOptions'=>array('class'=>'navbar-nav'),
				'items'=>array(
					array('label'=>'Usuarios', 'url'=>array('/usuario/index'),'linkOptions'=>array('itemCssClass'=>'nav-link')),
					array('label'=>'Post', 'url'=>array('/post/index'/*, 'view'=>'about'*/),'linkOptions'=>array('itemCssClass'=>'nav-link')),
					array('label'=>'Comentarios', 'url'=>array('/comentario/index'),'linkOptions'=>array('itemCssClass'=>'nav-link')),
					array('label'=>'Login/Cadastro', 'url'=>array('/site/login'),'linkOptions'=>array('itemCssClass'=>'nav-link'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),'linkOptions'=>array('itemCssClass'=>'nav-link'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
			</div>
		</nav>
	</header><!--


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	
</div><!-- page -->

<section class="separador">

</section>

<footer class="bg-dark m-0 b-0 fixed-bottom" id="footer">
	<div class="texto-footer">
		Copyright &copy; <?php echo date('Y'); ?> by Conexa - All Rights Reserved - <?php echo Yii::powered(); ?>
	</div>
</footer><!-- footer -->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/popper.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
