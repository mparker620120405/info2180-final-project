<?php

require("sqlconnect.php");

$email=$_POST['email'];//escape and sanitize inputs here 
$password=$_POST['password'];
$temp=$password;

if(isset($_POST['submit'])){
    if (empty($_POST["email"]) or empty($_POST["password"])){
        echo ("All fields are required");
    }
    else{
        $query="SELECT * FROM users WHERE email LIKE :email";
        $statement = $conn->prepare($query);
        $statement->bindValue(':email',$email,PDO::PARAM_STR);
        $statement->execute();
    	$count = $statement->rowCount();
    	if($count > 0){
        	session_start();
        	foreach ($statement as $row) {
                	$temp=$row['password'];
                	$ID=$row['id'];
        }
        if(password_verify($password, $temp)) {
            $_SESSION ['email'] = $email;
            $_SESSION['id']=$ID;
            header("location:newuser.php");
    	}
    	else {
       		echo "</br>Incorrect login credentials!";
       		echo "</br><a href='index.html'>Try Again</a>";
    	}
    
    }
    
    
}

}
?>
