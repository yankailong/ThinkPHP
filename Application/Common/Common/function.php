<?php

/*
手机号加密函数
eg. 15925729090 -> 159****9090
*/
// public function encrypt_phone($phone){
// 	return substr($phone, 0, 3) . '****' . substr($phone, 7);
// }


function encrypt_phone($phone){
	return substr($phone, 0, 3) . '****' . substr($phone, 7);
}

//密码加密函数
function encrypt_password($password){
	//加盐
	$salt = 'dasgfnd;fdsigd';
    
	return md5( $salt . md5($password) );

}
 


