<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="user_details"; 
$input_username=$_GET["username"]; 
$input_password=$_GET["password"]; 
$input_email=$_GET["email"]; 
$input_phone_no=$_GET["phone_no"]; 
$input_hometown=$_GET["hometown"]; 

$conn=new mysqli($servername,$username,$password,$dbname); 

// check connection 

if ($input_password==NULL or $input_password==NULL or $input_email==NULL or $input_phone_no==NULL or $input_hometown==NULL)
{
    echo "Blank entry!"; 
}
else {
    if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error); 
}

else {
    
    $sql="INSERT INTO user_info (db_username, db_password, email, phoneno,hometown) VALUES ('$input_username','$input_password','$input_email','input_phone_no','$input_hometown')";
    echo $sql; 

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