<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="user_details"; 
$input_username=$_GET["username"]; 
$input_password=$_GET["password"]; 
$email=$_GET["email"]; 
$phone_no=$_GET["phone_no"]; 

$conn=new mysqli($servername,$username,$password,$dbname); 

// check connection 

if ($input_password==NULL or $input_password==NULL)
{
    echo "Blank password or username!"; 
}
else {
    if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error); 
}

else {
    
    $sql="INSERT INTO user_info (db_username, db_password) VALUES ('$input_username','$input_password')";
    if($conn->query($sql))
    {
        echo "New account created"; 
    }
    else {
        echo "Account creation failed"; 
    }
}

}


?>