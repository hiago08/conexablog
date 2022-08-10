<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getUser(){
		return Yii::app()->user->id;
	}

	public function getDate(){
		return date("Y-m-d");
	}

	public function getUrl(){
		return Yii::app()->createUrl('post/view', array(
            'id'=>$this->id_post,
            'title'=>$this->titulo,
        ));
	}

	public function formatDate($format){
		$date = new DateTime($this->data);
		return $date->format($format);
	}

}