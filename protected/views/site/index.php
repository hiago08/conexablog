<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<section class="container">
	<h1 class="titulo">Posts recentes</h1>
	<?php 
		$models = Post::model()->findAll(array('order'=>'data DESC'));
		$pagination = new CPagination ([
			'pageSize' => 3,
			'totalCount' => count($models),
		]);

		foreach ($models as $model){
			$this->renderPartial('//post/_view', array(
				'data' => $model,
				'pages'=>$pagination,
			));
		}
	?>
</section>


