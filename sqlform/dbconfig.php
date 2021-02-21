<?php
$server = "localhost";
$username = "root";
$password = "#Lalitky004";
$dbname = "testdb";

  $conn = mysqli_connect($server, $username, $password,$dbname);
 if(isset($_POST['save']))
{
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['age']) && !empty($_POST['contactno']) && !empty($_POST['email'])){
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];
        $contact=$_POST['contactno'];
        $email=$_POST['email'];

        $query = "insert into empform(firstname,lastname,age,contactno,email) values('$fname' ,'$lname' , '$age','$contact','$email')" ;
        $run = mysqli_query($conn,$query);
        if($run){
            echo "form submitted successfully";
        }
        else{
            echo" form not submitted"; 
        }
    }
    else{
        echo "fill all fields";
    }
}

