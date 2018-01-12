<?php

/*
手机号加密函数
eg. 15925729090 -> 159****9090
*/
// public function encrypt_phone($phone){
// 	return substr($phone, 0, 3) . '****' . substr($phone, 7);
// }
function encrypt_phone($phone) 
{
	return substr($phone, 0, 3) . '****' . substr($phone, 7);
}
 


