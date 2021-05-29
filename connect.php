<?php

//replace username with your phpmyadmin username
//replace password with your phpmyadmin password
// replacce database name with your database name 
$conn = mysqli_connect("localhost", "username", "password", "databasename");

if($conn)
{
  //echo "Connection Success";
}
else
{
  //echo "Connection Failed";

}

?>