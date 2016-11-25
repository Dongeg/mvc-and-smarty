<?php
 /*
	mvc执行流程
	1.用户  -> 调用控制器，对其发出指令
	2.控制器-> 按指令选取一个合适的模型
	3.模型  -> 按控制器选取相应数据
	4.控制器->按指令选取相应视图
	5.视图  ->把第三步选取到的数据按照用户想要的样子显示出来 

 */ 
	require_once('testController.class.php');
	require_once('testModel.class.php');
	require_once('testView.class.php');
	$testController=new testController();
	$testController->show();//1	

 ?>