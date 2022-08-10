<?php

/**
 * This is the model base class for the table "post".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Post".
 *
 * Columns in table "post" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_post
 * @property integer $id_usuario
 * @property integer $id_categoria
 * @property string $titulo
 * @property string $texto
 * @property string $data
 *
 */
abstract class BasePost extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'post';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Post|Posts', $n);
	}

	public static function representingColumn() {
		return 'titulo';
	}

	public function rules() {
		return array(
			array('id_usuario, id_categoria, titulo, texto, data', 'required'),//Alterando
			array('id_usuario, id_categoria', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			array('id_post, id_usuario, id_categoria, titulo, texto, data', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'id_post', 'order'=>'comentarios.data DESC'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'id_usuario'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_post' => Yii::t('app', 'Id Post'),
			'id_usuario' => null,
			'id_categoria' => null,
			'titulo' => Yii::t('app', 'Titulo'),
			'texto' => Yii::t('app', 'Texto'),
			'data' => Yii::t('app', 'Data'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_post', $this->id_post);
		$criteria->compare('id_usuario', $this->id_usuario);
		$criteria->compare('id_categoria', $this->id_categoria);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('texto', $this->texto, true);
		$criteria->compare('data', $this->data, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}