<?php

function cheem($mail){
	$checkmail = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
    if(isset($mail) && $mail!=""){            //判断文本框中是否有值   
        if(preg_match($checkmail,$mail)){                       //用正则表达式函数进行判断  
           return 1;
        }else{  
           return 0;
        }  
    }  
}
