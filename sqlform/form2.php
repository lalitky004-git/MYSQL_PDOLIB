<html>
<head>
<style>
input{
    width:30%;
    height: 5%;
    border: 1px;
    padding: 8px 15px 8px 15px;
    border-radius: 5px;
    margin: auto;
    background-color: #BCC3CA;

}
</style>
</head>
  <body>
  <form action="" method="post"> 
  <h1>Search data from database</h1>
      <input type="text" name="email" required>
      <input type="submit" name="search" value="Search Data"/>
    </form>
<?php
$server = "localhost";
$username = "root";
$password = "#Lalitky004";
$dbname = "testdb";

  $conn = mysqli_connect($server, $username, $password,$dbname);
  if(isset($_POST['search']))
  {
      $email = $_POST['email'];
      $query= " select * from empform where email='$email'" ;
      $q_run = mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($q_run)){
        ?>
            <form action="" method="post">
            <input type="text" name="email" value="<?php echo $row['email'] ?>" /><br>
            <input type="text" name="fname"value="<?php echo $row['firstname'] ?>" /><br>
            <input type="text" name="lname" value="<?php echo $row['lastname'] ?>" /><br>
            <input type="text" name="age" value="<?php echo $row['age'] ?>"/><br>
            <input type="text" name="contactno" value="<?php echo $row['contactno'] ?>" /><br>
            </form>
        <?php
      }
  }
?>

</body>
</html>