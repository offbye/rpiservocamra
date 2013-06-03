<?php

if (isset($_GET['a'])) { //get angle bettween 0 to 180 
   $num = (int)(((int)$_GET['a'] * 11 + 500)/10);   //change angle to pulse width in 10ns,because servoblaster use this format
   system("echo 1=".$num ."> /dev/servoblaster"); //set GPIO17 angle to servoblaster
   echo $_GET['a'];
}

?>