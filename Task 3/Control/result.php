<?php
$x; $a; $b; $c; $d;

if(isset($_POST["submit"]))
{
    $firstname= $_REQUEST['firstname']; 

    if(empty($firstname) || strlen($firstname)<6)
    {
        $a= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $a= "First name = ".$firstname;
    }
    

    $lastname= $_REQUEST['lastname'];
    if(empty($lastname) || strlen($lastname)<6)
    {
        $b= "Please enter a valid name with more than 5 characters";
    }
    else
    {
        $b= "Last name = ".$lastname;
    }
   

    $age= $_REQUEST['age'];
    if(empty($age))
    {
        $c= "Please select your age";
    }
    else
    {
        $c= "Age =".$age;
    }
    
    if(isset($_POST["desigation"]))
    {
        $d= "Designation =".$_POST["desigation"] ;
    }
    else{
        $d= "Please select designation ";
    }
    
    if(isset($_POST["JAVA"]) && isset($_POST["PHP"]) && isset($_POST["C++"]))
        {
            $x= "  ".$_POST["JAVA"]."  ".$_POST["PHP"]."  ".$_POST["C++"];
            
        } 
        else if(isset($_POST["PHP"]) && isset($_POST["C++"]))
        {
            $x= "  ".$_POST["PHP"]."  ".$_POST["C++"];
            
        }
        else if(isset($_POST["JAVA"]) && isset($_POST["C++"]))
        {
            
            $x= "  ".$_POST["JAVA"]."  ".$_POST["C++"];
        }
        else if(isset($_POST["JAVA"]) && isset($_POST["PHP"]))
        {
            $x= "  ".$_POST["JAVA"]."  ".$_POST["PHP"];
            
        }
        else if(isset($_POST["C++"]))
        {
            $x= "  ".$_POST["C++"];
            
        }
        else if(isset($_POST["PHP"]))
        {
            $x= "  ".$_POST["PHP"];
            
        }
        else if(isset($_POST["JAVA"]))
        {
            $x= "  ".$_POST["JAVA"];
             
        }
    else
    {
        $x= "Please select Programming language";
    }

    $email= $_REQUEST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $f= "Please enter a valid email";
        }
        else
        {
            $f= "Email Address = ".$email;
        }

    $password= $_REQUEST['password']; 
        if(empty($password) || strlen($password)<6)
        {
            $g=  "Please enter a valid password";
        }
        else
        {
            $g= "Password is valid";
        }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
    {
        $h= "File Uploaded";
    }
    else
    {
        $h= "File Cannot Upload";
    }
}
//storing data using JSON
$formdata = array(
    'firstName'=> $_POST["firstname"],
    'lastName'=> $_POST["lastname"],
    'age'=> $_POST["age"],
    'designation'=>$_POST['designation'],
    'programming language'=>$x,
    'email'=>$_POST["email"]
 );
 $existingdata = file_get_contents('data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;

 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 

 if(file_put_contents("data.json", $jsondata)) {
      echo "Data successfully Saved <br>";
  }
 else 
 {
      echo "No data saved";
 }


?>