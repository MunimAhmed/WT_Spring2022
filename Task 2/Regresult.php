<?php

$firstname=$lastname=$age=$email=$password="";

$firstname= $_REQUEST['firstname']; 

if(empty($firstname) || strlen($firstname)<6)
{
    echo "Please enter a valid name with more than 5 characters";
}
else
{
    echo "First name = ".$firstname;
}
echo"<br>";

$lastnamename= $_REQUEST['lastname'];
if(empty($lastname) || strlen($firstname)<6)
{
    echo "Please enter a valid name with more than 5 characters";
}
else
{
    echo "First name = ".$lastname;
}
echo"<br>";

$age= $_REQUEST['age'];
if(empty($age))
{
    echo "Please select your age";
}
else{
    echo "Age =".$age;
}
echo"<br>";
if(isset($_POST["desigation"]))
{
    echo "Designation =".$_POST["desigation"] ;
}
else{
    echo "Please select designation ";
}
echo"<br>";
if (isset($_POST["JAVA"]) || isset($_POST["PHP"]) ||  isset($_POST["C++"]))
{
    echo "You have selected Programming Language";
    if(isset($_POST["JAVA"]))
    {
        echo "you have selected".$_POST["JAVA"];
    }
    if(isset($_POST["PHP"]))
    {
        echo "you have selected".$_POST["PHP"];
    }
    if(isset($_POST["C++"]))
    {
        echo "you have selected".$_POST["C++"];
    }
}
else{
    echo "Please select Programming language";
    }
    echo"<br>";

$email= $_REQUEST['email'];

    if(empty($mail))
    {
        echo "Please enter a valid email";
    }
    else
    {
        echo "Email Address = ".$mail;
    }
    echo"<br>";

$password= $_REQUEST['password']; 
    if(empty($password) || strlen($password)<6)
    {
        echo "Please enter a valid password";
    }
    else
    {
        echo "Password is valid";
    }
    echo"<br>";
echo"<br>";
?>