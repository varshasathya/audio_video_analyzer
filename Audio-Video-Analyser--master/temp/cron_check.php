<?php
require "/home/trendsep/public_html/sih2018/config/config.php";
 $conn=connection();
	 $sql="insert into `tmp` (`name`)values(1)";
     $val=query_ddl($conn,$sql);

?>