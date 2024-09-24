<?php
$peoplename=filter_input(INPUT_POST,'Name');
$peoples=filter_input(INPUT_POST,'People');
$date=date('d-m-y', strtotime($_REQUEST['date']));
$message=filter_input(INPUT_POST,'Message');
if(!empty($peoplename))
{
$servername="localhost";
$username="root";
$password="";
$dbname="iman";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die ("conection error");
}
else
{
    echo "connection succesfull";
    $sql="INSERT INTO imant (name,people,date,message)VALUES('$peoplename','$peoples','$date','$message')"; 
      $result= mysqli_query($conn,$sql);
      if($result){
      echo "new record submited";
      }else
{
      echo " record not added".
      mysqli_error($conn);
}
}
}
else{
}?>