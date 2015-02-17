<?php
   $serveur='192.168.56.101';
   $username='root';
   $password='toor';
   $databasename='PizzaSaturne';
   
   
   $idconn=mysqli_connect($serveur,$username,$password);
   if (mysqli_errno($idconn)){
   		print(mysqli_error($idconn));}
   $select_database=mysqli_select_db($idconn,$databasename);
   
 ?>