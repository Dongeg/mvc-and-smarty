<?php 
	class testController {
		function show(){
			//$testModel=new testModel();//2
			$testModel=M('test');
			$data=$testModel->get();//3
			//$testView=new testView();//4
			$testView=V('test');
			$testView->display($data); //5
		}
	}
/*
控制器的作用是调用模型，调用视图，将模型产生的数据让视图去显示
*/
 ?>