<?php
$systemname="localhost";
$username="root";
$pass="";
$databasename="new";
$conn=new mysqli($systemname,$username,$pass,$databasename);
if($conn){
    echo "sucessful";
}
    else{
        echo "not correct";
    }
    mysqli_query($conn,"insert into `student` ( name, date_of_birth, class) values( 'rajesh', '2004-12-08', '2nd BCA')");
    mysqli_query($conn,"insert into`student` ( name, date_of_birth, class) values ('rakshi', '2004-sep-17','2')");
?>