<?php 
  /** 
   * Multibyte character encoding schemes and their related issues are fairly 
   * complicated, and are beyond the scope of this documentation. Please refer to 
   * the following URLs and other resources for further information regarding these topics.  
   */ 
   
  /* Set internal character encoding to UTF-8*/ 
  mb_internal_encoding('UTF-8');  

  $str = 'واللغة العربية PHP مشروع'; 

  echo strlen($str);             // 42 
  echo mb_strlen($str, 'UTF-8'); // 24 

  echo strtolower($str); // ������ ������� php ���� 
  echo mb_strtolower($str); // واللغة العربية php مشروع 
?>
