<?php

Yii::import('application.models._base.BaseComentario');

class Comentario extends BaseComentario
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getDate(){
		return date("Y-m-d");
	}
}