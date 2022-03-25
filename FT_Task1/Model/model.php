<?php
class DB
{
    //connection function
    function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass="1234"; //I have password in my sql server user 
$DBName="labtask";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }
//query function
    function InsertData($firstname, $lastname, $age, $designation, $programming_language, $email, $password, $filename, $tablename, $conn){
$sqlstr="INSERT INTO registration (firstname, lastname, age, designation, programming_language, email, password, filename) values ('$firstname', '$lastname', $age, '$designation', '$programming_language', '$email', '$password', '$filename')";

if($conn->query($sqlstr)==TRUE)
{
echo "Data Inserted Successfully";
}
else{
    echo "cant insert".$conn->err;
}
    }
//close function
function closecon($conn){
    $conn->close();
}

}
?>