<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
    	
     	$this->display();
     	
    }
    
        

    
    
    
    
      public function login(){
    	
    	$admin_username =  $_REQUEST['admin_username'];
    	$admin_password = $_REQUEST['admin_password'];	
    	$Model = new \Think\Model();
    
    	$text = $Model->query('select * from admin_login');
    	
    	//echo $admin_username;
    	for($a=0;$a<sizeof($text);$a++){
    		if($admin_username==$text[$a]['user_name']){	
    			if($admin_password==$text[$a]['password']){
    				
					setcookie('name',$admin_username);
    				$this->success('登录成功','login_out');
    			}
    		}
    	}
    	
    	
    }
    
    
    
    
    public function login_out(){
    $Model = new \Think\Model();	
    	//echo '欢迎光临'.$_COOKIE['name'];
    $text = $Model->query('select * from admin_login');
    
   // print_r($text);
//  	$shuzu = array();
//  	$shuzu[0]['admin'] = '后台首页';
// 		$shuzu[0]['href']='#';
// 			
//  	$shuzu[1]['admin'] = '后台添加';
//  	$shuzu[1]['href']='#';
//  	
//  	$shuzu[2]['admin'] = '后台管理';
//  	$shuzu[2]['href']='#';
    	
    	//index
		$shuzu= array(
			array('admin'=>'后台首页',
				  'href'=>'#',
				  'index'=>array(
				  				array('name'=>'显示首页','href'=>'/thinkphp3.2/admin.php/Home/Index/login_out'),
				  ),
			),
			
			array('admin'=>'后台添加',
				  'href'=>'#',
				  'enjoy'=>array(
				  				array('name'=>'标题添加','href'=>'#'),
				  				array('name'=>'banner添加','href'=>'#'),
				  				array('name'=>'文章添加','href'=>'#'),
				  ),
			),
			
			array('admin'=>'后台管理',
				  'href'=>'#',
				  'guanli'=>array(
				  				array('name'=>'清楚缓存','href'=>'#'),
				  
				  ), 
			),	
	); 
		   				
		
		$this->assign('shuzu',$shuzu);    	
    	$this->display();
    }
    
    
    
}