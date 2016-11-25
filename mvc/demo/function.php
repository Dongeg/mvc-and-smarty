<?php 
	// 控制器调用函数
	function C($name,$method){
		require_once('./libs/Controller/'.$name.'Controller.class.php');
		$controller=$name.'controller';
		$obj=new $controller;
		$obj->$method();
	}


	// 模型调用函数
	function M($name){
		require_once('./libs/Model/'.$name.'Model.class.php');
		$model=$name.'Model';
		$obj=new $model;
		return $obj;
	}



	//视图调用函数
	function V ($name){
		require_once('./libs/View/'.$name.'View.class.php');
		$view=$name.'View';
		$obj=new $view();
		return $obj;
	}
	// 特殊符号转义
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addcslashes($str):$str;
	}

 ?>