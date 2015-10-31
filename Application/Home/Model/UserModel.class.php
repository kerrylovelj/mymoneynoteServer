<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
   protected $_validate = array(
     array('username','require','用户名必须！'), // 用户名必须
     array('username','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
     array('username','6,16','账户长度不正确',0,'length'), // 验证密码是否在指定长度范围
   );
}