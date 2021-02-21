<?php
include 'dbconfig.php';
?>
<!Doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>

<style>
    .maintitle {
      color: #1B9596;
      border-style: solid;
      border-color: rgba(211, 205, 205, 0.5);
     }
     #menu a {
    color: #1B9596;
    cursor: pointer;
    font-size: 15px;
    text-transform: none;
    margin-right: 12px;
     }
     .mainform {
         border: 1px solid #b0b0b0;
         width: 400px;
         border-radius: 5px;
         margin: auto;
     }
     .title1 {
    background-color: #BCC3CA;
        margin: 0;
    padding-top: 1em;
    padding-bottom: 1em;
}
</style>
</head>
<body>
<body>
   <div class="maintitle">
		<div id="menu">
			<a href="index.html">Home</a>
              		<a href="index.html#help">Quick Help</a>
					</div>
			<h3>TO THE NEW</h3>
		</div>
        <div style="margin: auto; max-width: 715px; padding: 5px">
    <div class="mainform">
        <div class="title1" style="padding-bottom: 18px;font-size : 24px; color: #fff; ">Bug Report</div>
        <div style="padding-bottom: 18px; padding-left: 20px;" class="formbody">
        <form action="dbconfig.php" method="post"> 
        <label> First name:</label><br/>
        <input type="text" name="firstname" required><br/>
        <label>Last name</label><br/>
        <input type="text" name="lastname" required><br/>
        <label>Age</label><br/>
        <input type="text" name="age" required><br/>
        <label>Contactno</label><br/>
        <input type="text" name="contactno" required><br/>
        <label>Email</label><br/>
        <input type="text" name="email" required><br/>

<button type="submit" name="save">save</button>

            </form>
        </div>
    </div>

</body>


</body>
</html>
