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
          <li class="active"><a href="dashboard.php"><span>Home Page</span></a></li>
          <li><a href="eBlood.php"><span>Why eBlood?</span></a></li>
          <!-- <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="blog.html"><span>Feedback</span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li> -->
        </ul>
      </div>
      
     <!-- 
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/one.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/two.jpg" width="940" height="310" alt="" /> </a> <a href="#"><img src="images/three.jpg" width="940" height="310" alt="" /> </a> </div> 
        <div class="clr"></div><div class="clr"></div> 
        
      </div>  -->
      <div class="clr"></div> 
<!--
    </div>
  </div> 
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        <!--  <h1><span>Welcome To</span> eBlood</h1>
        
          <div class="clr"></div> -->
         
<body>
<?php


//include("auth.php");

session_start();
$username=$_SESSION['username'];
$con = mysqli_connect("localhost","root","","register");


if (isset($_POST['mobile_no'])) {
      
    $mobile_no=$_POST['mobile_no'];
    
     $district =$_POST['district']; 
    
     $address =$_POST['address'];
     
   
  {
    
   
$sql1="SELECT id FROM users WHERE username='".$_SESSION['username']."'";
$result1=mysqli_query($con,$sql1);
if($result1==FALSE){
  die(mysqli_error($con));
}
while ($row = $result1->fetch_assoc()) {
    $id= $row['id'];
}
}
$sql2="UPDATE fill SET mobile_no='$mobile_no', district='$district', address='$address' WHERE id='$id'";
$result2=mysqli_query($con,$sql2);
if($result2==FALSE){
  die(mysqli_error($con));
}
 } else {
  ?>


<div class="form"> 
<p><b>Hello </b><b><i><?php echo $_SESSION['username']; ?>!</i></b></p>
<br>
<br>
<form action="" method="post" name="Update">
<input type="text" name="mobile_no" placeholder="Mobile number" required />
<br>
  <select name="district">
  <option value="">select district</option>
  <option  value="kasaragod">kasaragod</option>
  <option value="kannur">kannur</option>
  <option  value="wayanad">wayanad</option>
  <option value="kozhikode">kozhikode</option>
   <option  value="malappuram">malappuram</option>
    <option value="palakkad">palakkad</option>
     <option  value="thrissur">thrissur</option>
      <option value="ernakulam">ernakulam</option>
       <option value="idukki">idukki</option>
        <option value="kottayam">kottayam</option>
         <option value="alappuzha">alappuzha</option>
          <option value="pathanamthitta">pathanamthitta</option>
           <option value="kollam">kollam</option>
            <option value="thiruvananthapuram">thiruvananthapuram</option>
</select>
<br>
<input type="text" name="address" placeholder="Address" required />
<br>


<input name="submit" type="submit" value="Update" />
</form>
</div>
<?php } ?>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
