<?php $connect = mysqli_connect( "127.0.0.1", "root","Damon2016","test");
          if($connect->connect_error){
            die("connecttion failed:".$connect->connect_error);
          }
?>