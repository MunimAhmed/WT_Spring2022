<html>
<body>
    <h1> Registration Form </h1> <hr>
    
<form action="Regresult.php" method="post">
<table>
<tr>
<td> First Name : </td>
<td> <input type="text" name="firstname"> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lastname"> </td>
</tr>
<tr>
<td> Age : </td>
<td> <input type="number" name="age"> </td>
</tr>
<tr>
<td> Designation: </td>
<td> <input type="radio" name="desigation" value="Junior Programmar">Junior Programmar
<input type="radio" name="desigation" value="Senior Programmar">Senior Programmar
<input type="radio" name="desigation" value="Project Lead">Project Lead </td>
</tr>
<tr>
<td> Preferred Language: </td>
<td> <input type = "checkbox" id="plng" value="JAVA">JAVA
<input type = "checkbox" id="plng" value="PHP">PHP
<input type = "checkbox" id="plng" value="C++">C++ </td>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "Email" > </td>
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > </td>
</tr>
<tr>
<td> Please choose a file </td>
<td> <input type="file" id="myFile" name="filename"> </td>
</tr>
<tr>
<td> <input type="submit" value="Submit">
<input type="reset" value="Reset"> </td>
</tr>
</table>
</body>
</html>