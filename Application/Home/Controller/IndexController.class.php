<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$file = fopen('./PUBLIC/CSV/mc.csv',r);
		
		while ($data = fgetcsv($file)) { 
		//每次读取CSV里面的一行内容
			$goods_list[] = $data;
		}
		
		foreach($goods_list as $k=>$v){
			if($k != 0){ //排除第一行 
			
				if(cheem($v[2]) == 1){ // 调用 cheem 验证邮箱格式
				$datas = array(
					'user'=>strtoupper($v[0]),//转为大写
					'users'=>strtoupper($v[1]),
					'em'=>$v[2],
				);
				M('User')->add($datas);//入库
				}else{
					echo '错误邮箱号码处理';
				}
			}
		}
		
	}
}