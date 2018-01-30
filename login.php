<?php 
$servername="localhost"; 
$username="root"; 
$password=""; 
$dbname="user_details"; 
$input_username=$_GET["username"]; 
$input_password=$_GET["password"]; 

$conn=new mysqli($servername,$username,$password,$dbname); 

// check connection 

if ($conn->connect_error){
	die("Connection failed: ".$conn->connect_error); 
}

else {
	$sql="SELECT * FROM user_info WHERE db_username='$input_username' 
    && db_password='$input_password'";
    //echo $sql; // Uncomment this to see the modified SQL command in the browser. 
    $result =$conn->query($sql); 
    $num_rows = $result->num_rows; 
	if ($num_rows>0){   
        echo "Login successful !"; 

        while( $row = mysqli_fetch_assoc($result) ){
            $username=$row['db_username'];
            $email=$row['email']; 
            $hometown=$row['hometown']; 
            $phoneno=$row['phoneno'];
        }

        $url='view_info.php'; 
        $url .= '?username='.$username;
        $url .= '&email='.$email;
        $url .= '&hometown='.$hometown;
        $url .= '&phoneno='.$phoneno;
        header('Location: '.$url);
    }
    else {
    	echo "Login Failed ! Please try again. "; 
    }
}
?>