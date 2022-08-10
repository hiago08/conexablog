<?php

class PostController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Post'),
		));
	}

	public function actionCreate() {
		$model = new Post;


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);
			$model->id_usuario = $model->getUser();
			$model->data = $model->getDate();
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_post));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Post');


		if (isset($_POST['Post'])) {
			$model->setAttributes($_POST['Post']);


			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_post));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Post')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		// var_dump($_GET['id_categoria']);
		// die;
		if(!isset($_GET['id_categoria'])){
			$dataProvider = new CActiveDataProvider('Post');
		}else{
			$dataProvider = new CActiveDataProvider('Post',array(
				'criteria'=>array(
					'condition'=> 'id_categoria='.$_GET['id_categoria'],
				),
			));
		}
		// $dataProvider = new CActiveDataProvider('Post');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Post('search');
		$model->unsetAttributes();

		if (isset($_GET['Post']))
			$model->setAttributes($_GET['Post']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}