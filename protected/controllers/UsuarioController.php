<?php

class UsuarioController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate','update','delete'),
				'users'=>array('@'),
				),
			array('allow', 
				'actions'=>array('admin'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Usuario'),
		));
	}


	public function encryptPassword($password){
		
	}

	public function actionCreate() {
		$model = new Usuario;


		if (isset($_POST['Usuario'])) {
			$model->setAttributes($_POST['Usuario']);
			$model->senha = CPasswordHelper::hashPassword($model->senha); //Criptografa senha
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_usuario));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Usuario');


		if (isset($_POST['Usuario'])) {
			$model->setAttributes($_POST['Usuario']);
			$model->senha = CPasswordHelper::hashPassword($model->senha); //Criptografa senha
			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_usuario));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Usuario')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Usuario');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Usuario('search');
		$model->unsetAttributes();

		if (isset($_GET['Usuario']))
			$model->setAttributes($_GET['Usuario']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}