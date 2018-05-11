<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>eBlood</title>
<link rel="stylesheet" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">

    <div class="header_resize">


    <img src="images/logo.jpg" alt="logo" style="width:220px;height:88px;" align="top"/>
   
    
    
      <div class="menu_nav">
        <ul> 
          <li class="active"><a href="registration.php"><span>Home Page</span></a></li>
          <li><a href="eBlood.php"><span>Why eBlood?</span></a></li>
         <!-- <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Blog</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li> -->
        </ul>
      </div>
      
      <div class="clr"></div>
   <!--   <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="940" height="310" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h1><span>Welcome To</span> eBlood</h1>
        
          <div class="clr"></div>
       -->  
<body>

<?php
session_start();
$username=$_SESSION['username'];
if (isset($_POST['feedback'])) {


$feedback =$_POST['feedback'];

$conn = mysqli_connect("localhost","root","","register");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO feedback2 (username,feedback)
VALUES ('$username','$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}else {
?>

<div class="form">
<h1>Feedback</h1>
<br>
<br>
<br>
<form action="" method="post" name="login">
<p><b>Hello </b><b><i><?php echo $_SESSION['username']; ?>!</i></b></p>
<input type="text" name="feedback" placeholder="Feedback" required />
<br>
<input name="submit" type="submit" value="Post" />
</form>

<!--<h3>
<p>Not registered yet? <a href='registration.php' style="color:white">Register Here</a></p>

<br /><br />
</h3> -->
</div>
<?php } ?>
<?php
    $con=mysqli_connect("localhost","root","","register");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM feedback2");

    while($row = mysqli_fetch_array($result))
      {
      echo $row['username'] . " " . $row['feedback'] ; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }

    mysqli_close($con);
    
 echo "<table>";
 while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td>" . $row['username'] . "</td><td> " . $row['feedback']  . "</td><td> "; //these are the fields that you have stored in your database table employee
          }
 echo "</table>";

?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
