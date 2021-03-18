
<?php
$server="localhost";
$user="root";
$password="";
$dbname="skill";

$conn= mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}

else {
    echo "Sucessfully connected";
}


$sql= "UPDATE users SET name= 'Ali',email='abdu@' WHERE id= 4 ";


if (mysqli_query($conn,$sql)) {
    echo "New Record updated has been inserted";
}
else {
  echo mysqli_error();
}


?>