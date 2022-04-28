<?php
include "../Control/registrationcheck.php"
?>

<html>


<head>
<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
<script src="../JS/myjs.js" defer></script>
</head>

<body>
    
  
    
<form action="" method="post" enctype="multipart/form-data" class='admin-reg-frorm' id="form">
    
<div class='.main-body'>
<div class='form-fields'>
<h2> Sign Up </h2>
<div class='form-field'>
<label> First Name : </label> 
 <input type="text" name="firstname"  id="fname"> 
 <small>Error Message</small>
 </div> 
 <p> <?php echo $a ?> </p> <br>

 <div class='form-field'>
 <label> Last Name : </label>  
 <input type="text" name="lastname" id="lname"> 
 <small>Error Message</small>
 </div>  
 <p>  <?php echo $b ?>  </p> <br>

 <div class='form-field'>
 <label> Age : </label> 
 <input type="number" name="age" id="age"> 
 <small>Error Message</small> 
</div>  
<p> <?php echo $c ?> </p> <br>

<div class='form-field select'>
<label> Designation: </label>
 <input type="radio" name="designation" value="Junior Programmar"><span> Junior Programmar </span>
<input type="radio" name="designation" value="Senior Programmar"><span> Senior Programmar </span>
<input type="radio" name="designation" value="Project Lead"><span> Project Lead </span>
</div>  
<p>  <?php echo $d ?> </p> <br>

<div class='form-field select'>
<label> Preferred Language: </label>
 <input type = "checkbox" name="JAVA" value="JAVA"><span>JAVA</span>
     <input type = "checkbox" name="PHP" value="PHP"><span>PHP</span>
     <input type = "checkbox" name="C++" value="C++"><span>C++ </span>
     </div>  
     <p>   <?php echo $errprogramming_language?> </p> <br>

<div class='form-field'>  
<label> Email :  </label>
 <input type = "text" name= "email" id="email"> 
 <small>Error Message</small>
 <p> <?php echo $f ?> </p> <br>


 <div class='form-field'>  
 <label>Password :  </label>
 <input type = "password" name= "password" placeholder="More than 4 characters" id="password"> 
 <small>Error Message</small>
 </div>  
 <?php echo $g ?> 


 <div class='form-field'>  
 <label>Confirm Password :  </label>
 <input type = "password" name= "confirmpassword" placeholder="More than 4 characters" id="confirmpassword"> 
 <small>Error Message</small>
 </div>  
 <?php echo $g ?> 



 <div class='form-field'> 
 <label> Please choose a file </label>
 <input type="file" name="myfile"> 
 </div>  
 <?php echo $h ?> 

 <div class='form-field'> 
 <input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset"> 
</div>

</div>
</div>
</form>
</body>
</html>

