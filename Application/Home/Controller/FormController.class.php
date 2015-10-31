<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller {
	public function index(){
		$this -> display();
	}

	public function register(){
		if(IS_POST){
    		$username = I('POST.username');//用户名
    		$password = md5(I('POST.password'));

    		$data['username']=$username;
    		$data['password']=$password;
    		$result = D('user');
    		if($result->create()&&$result->add($data)){
    				//注册成功
    				$this -> show("200");
    		}else{
    				//注册失败
    				$this -> show("101".$result->getError());
    			}
    	}else{
            $this -> show("102");
        }
    }
}