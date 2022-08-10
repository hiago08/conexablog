<?php

Yii::import('application.models._base.BaseUsuario');

class Usuario extends BaseUsuario
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	public function encryptPassword($senha){
		$hash = CPasswordHelper::hashPassword($senha);
		return $hash;
	}

	public function validarSenha($senhaUsuario){
		// if($senhaUsuario != $this->senha){
		// 	return false;
		// }else{
		// 	return true;
		// }
		return CPasswordHelper::verifyPassword($senhaUsuario,$this->senha);
	}

}