<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
    	
      $this->display();
      
    }
    
    
  
    public function youai(){
    	
    	$name =  $_REQUEST['name'];
    	
    	echo "接收到了".$name;
    	
    	return "接收到了";
//  	$this->display();
    }
    
    
    
    
    public function shouye(){
    	
    	
    		$shuzu  = array();
    	
    		$shuzu[0]['id']="1";
    		$shuzu[0]['name']="方旗店正品春雨蜂蜜面膜";
    		$shuzu[0]['money']="80";
    		$shuzu[0]['money_z'] ='9.9';
    		$shuzu[0]['type']="1";
    		$shuzu[0]['url']="taobao";
    		
    		
    		$shuzu[1]['id']="2";
    		$shuzu[1]['name']="秋季女装";
    		$shuzu[1]['money']="80";
    		$shuzu[1]['money_z'] ='9.9';
    		$shuzu[1]['type']="1";
    		$shuzu[1]['url']="taobao";
    		
    		
    		
    		$shuzu[2]['id']="3";
    		$shuzu[2]['name']="正品js";
    		$shuzu[2]['money']="80";
    		$shuzu[2]['money_z'] ='9.9';
    		$shuzu[2]['type']="1";
    		$shuzu[2]['url']="taobao";
    		
    		
    		
    		$shuzu[3]['id']="4";
    		$shuzu[3]['name']="汤臣倍健叶";
    		$shuzu[3]['money']="80";
    		$shuzu[3]['money_z'] ='9.9';
    		$shuzu[3]['type']="1";
    		$shuzu[3]['url']="taobao";
    		
    		
    		$shuzu[4]['id']="5";
    		$shuzu[4]['name']="西冷牛排";
    		$shuzu[4]['money']="80";
    		$shuzu[4]['money_z'] ='9.9';
    		$shuzu[4]['type']="1";
    		$shuzu[4]['url']="taobao";
    	
    		
    		
    		$shuzu = json_encode($shuzu);
    		print_r($shuzu);
    		return $shuzu;
    	
    }
    
    
    
    public function shouyes(){
    	
    		$shuzu  = array();
    	
    		$shuzu[0]['id']="6";
    		$shuzu[0]['name']="U盘";
    		$shuzu[0]['money']="80";
    		$shuzu[0]['money_z'] ='9.9';
    		$shuzu[0]['type']="1";
    		$shuzu[0]['url']="taobao";
    		
    		$shuzu[1]['id']="7";
    		$shuzu[1]['name']="欧洲进口口服液";
    		$shuzu[1]['money']="80";
    		$shuzu[1]['money_z'] ='9.9';
    		$shuzu[1]['type']="1";
    		$shuzu[1]['url']="taobao";
    		
    		$shuzu[2]['id']="8";
    		$shuzu[2]['name']="不知道写什么好了";
    		$shuzu[2]['money']="80";
    		$shuzu[2]['money_z'] ='9.9';
    		$shuzu[2]['type']="1";
    		$shuzu[2]['url']="taobao";
    	
    	
    		$shuzu = json_encode($shuzu);
    		print_r($shuzu);
    		return $shuzu;
    
    }
    
    
    public function shanchu(){
    	header('Access-Control-Allow-Origin:*');
    	$shuzu =array();	
    			$shuzu[0]['id'] = "1";
  			$shuzu[0]['url'] = "../../static/img/ph_photo.png";
//  			
    			
    			$shuzu[1]['id'] = "2";
    			$shuzu[1]['url'] = "../../static/img/ph_photo.png";
    			
    			
    			$shuzu[2]['id'] = "3";
    			$shuzu[2]['url'] = "../../static/img/ph_photo.png";
//  		

				$array = $shuzu;
//  			$array = json_encode($shuzu);
    			print_r(json_encode($array));
    			return $array;
    }
    
    
    public function  jieshou(){
    	
    	header('Access-Control-Allow-Origin:*');	
    	
   			$shuzu = $_FILES;
 
			 	print_r(json_encode($shuzu));
    	//因为作用域是在本地，所以只能用本地路径

    	$tmp = $_FILES['shangchuan']['tmp_name'];
    	$imgnames = "F:/phpstudy/PHPTutorial/WWW/thinkphp3.2/upload"+$_FILES['shangchuan']['name'];

    	if(move_uploaded_file($tmp,$imgnames)){
    		echo "上传成功";
    		exit();
//  		return $array;
	    }else{
	    	echo "上传失败";
    		exit();
	    }
    }
    
    
    
    public function abcdef(){
//  	    echo "abc";
		  	$name = system("java test",$lx);
//		  	$name = system("dir",$lx);
//		  	$name = iconv('UTF-8','GBK',$name);
		  	echo $name;
		  	if($lx){
		  		echo "成功";
		  	}else{
		  		echo "失败";
		  	}
    }
    
    
    
    
    public function lt_user(){
    	$this->display();
    }
    public function lt_kefu(){
    	$this->display();
    }
    
    
    public function select_huizong($canshu=0,$users=null){
			$Model = new \Think\Model();
			switch($canshu){
				case 0:
				//多表关联查询
				$shijian = date("Y-m-d",time());
				$z_shijian = date("Y-m-d H:i:s",strtotime($shijian));
				$users =  $_POST['ips'];
				$hz_shuzu =	$Model->query("select * from ( select * from users where user_ip ='".$users."' union all select * from kefu where name = '".$users."' )X where time > '".$z_shijian."'");
				//用户查询数据
// 							$kefuname = "客服1";
// 				    	$ipdz =  $_SERVER['REMOTE_ADDR'];
				    	$zhi = 0;
				    	for($a=0;$a<sizeof($hz_shuzu);$a++){
				    			 $hz_shuzu[$a]['time'] = strtotime($hz_shuzu[$a]['time']);
				    	}
				    	array_multisort(array_column($hz_shuzu,'time'),SORT_ASC,$hz_shuzu); 	
				    	for($a=0;$a<sizeof($hz_shuzu);$a++){
				    			 $hz_shuzu[$a]['time'] = date("Y-m-d H:i:s",$hz_shuzu[$a]['time']);
									 $hz_shuzu[$a]['name'] = $hz_shuzu[$a]['user_ip'];
				    	}
				    	
						print_r(json_encode($hz_shuzu));	
				break;
				case 1:
							//客服查询数据
								$shijian = date("Y-m-d",time());
								$z_shijian = date("Y-m-d H:i:s",strtotime($shijian));
								$hz_shuzu =	$Model->query("select * from ( select * from users where user_ip ='".$users."' union all select * from kefu where name = '".$users."' )X where time > '".$z_shijian."'" );
								//用户查询数据
											$zhi = 0;
											for($a=0;$a<sizeof($hz_shuzu);$a++){
													$hz_shuzu[$a]['time'] = strtotime($hz_shuzu[$a]['time']);
											}
											array_multisort(array_column($hz_shuzu,'time'),SORT_ASC,$hz_shuzu);
											for($a=0;$a<sizeof($hz_shuzu);$a++){
													$hz_shuzu[$a]['time'] = date("Y-m-d H:i:s",$hz_shuzu[$a]['time']);
													$hz_shuzu[$a]['name'] = $hz_shuzu[$a]['user_ip'];
											}
								return $hz_shuzu;
				break;
// 				case 2:
// 							$shijian = date("Y-m-d",time());
// 							$z_shijian = date("Y-m-d H:i:s",strtotime($shijian));
// 							$hz_shuzu =	$Model->query("select * from (select * from users where user_ip = '".$users."' union all select * from kefu where name = '".name."' )X where time > '".$z_shijian."'" );
// 							$zhi = 0;
// 							for($a=0;$a<sizeof($hz_shuzu);$a++){
// 									$hz_shuzu[$a]['time'] = strtotime($hz_shuzu[$a]['time']);
// 							}
// 							array_multisort(array_column($hz_shuzu,'time'),SORT_ASC,$hz_shuzu);
// 							for($a=0;$a<sizeof($hz_shuzu);$a++){
// 									$hz_shuzu[$a]['time'] = date("Y-m-d H:i:s",$hz_shuzu[$a]['time']);
// 									$hz_shuzu[$a]['name'] = $hz_shuzu[$a]['user_ip'];
// 							}
// 							return $hz_shuzu;
// 				break;	
			}
			
    	
    
    	
//  	1546359239  2019	
//  	1514823239	2018  	
//  	print_r($hz_shuzu);
    	
    }
    
    
    public function user_select($id){
    	$Model = new \Think\Model();
        $wenben = $Model->query("select * from users where user_ip = '".$id."'");
    	return $wenben;
    }
    
    /*
       用户id
       客服名字name
     * */
    public function kefu_select($id,$name){
    	$Model = new \Think\Model();
    	$wenbens = $Model->query("select * from kefu where user_ip = '".$id."' AND name = '".$name."'");
    	return $wenbens;
    }
    
    
    
    public function lt_add(){
    	
    	$Model = new \Think\Model();
    	
    	$wenben = $_POST['text'];
    	$time = date("Y-m-d H:i:s",time());
    	$ipdz =  $_POST['ip'];
    	
	 	$shuzu = $Model->execute("INSERT INTO `users` (`id`,`user_ip`,`text`,`time`,`name`) VALUES (NULL,'".$ipdz."','".$wenben."','".$time."','客服1') ");
    	$fh = array();	
    	$fh['text'] =$wenben; 
    	$fh['type'] = "200";
    	$fh['time']  = $time;
			$fh['name'] = '127.0.0.1';
    	print_r(json_encode($fh));	
    }
    
    
    public function lt_add_kefu(){
    	$Model = new \Think\Model();
    	
    	$kefu_mingzi = '客服1';
    	
    	$wenben = $_POST['text'];
    	$time = date("Y-m-d H:i:s",time());
			$ipdz =  $_POST['ip'];
			
  	 	$shuzu = $Model->execute("INSERT INTO `kefu` (`id`,`user_ip`,`name`,`text`,`time`) VALUES (NULL,'".$kefu_mingzi."','".$ipdz."','".$wenben."','".$time."') ");
    	$fh = array();	
    	$fh['text'] =$wenben; 
    	$fh['type'] = "200";
    	$fh['time']  = $time;
			$fh['name'] = '客服1';
    	print_r(json_encode($fh));
    	
    }
		
		
		
		
		
		public function demonstration_acquisition(){
				
			  
				$kefu_ming = '客服1';
				$ips =  $_POST['ips'];
	
			$shuzu = 	$this->select_huizong(1,$ips);	
			print_r(json_encode($shuzu));
			
		}
		
		
		
		public function dyh(){
			$Model = new \Think\Model();
			
		$shuzu =	$Model->query('select distinct user_ip from users');
			
			print_r(json_encode($shuzu));
			
		}
		
		
		
		
		public function huanren(){
			
			$ip = $_POST['ip'];
			$shuzu = $this->select_huizong(1,$ip);
			print_r(json_encode($shuzu));
			
		}
		
		

    
    
    
}