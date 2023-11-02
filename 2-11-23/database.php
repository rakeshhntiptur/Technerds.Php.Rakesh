<?php
$systemname="localhost";
$username="root";
$pass="";
$databasename="rakesh";
$conn=new mysqli($systemname,$username,$pass,$databasename);
if($conn){
    echo "sucessful";
}
    else{
        echo "not correct";
    }

mysqli_query($conn,"insert into `user` ( name, class) values ( 'rfff', '3nd')");
mysqli_query($conn,"insert into `user` ( name, class) values ( 'mee', '1st')");
mysqli_query($conn,"insert into `user` ( name, class) values ( 'you', '5th)");