<?php
//密码加密函数
function encrypt_psssword($password){
	//盐 （加盐）
	$salt = 'sdhnjds;afdkgdsaje';
	return md5($salt . md5($password));
	
}

?>