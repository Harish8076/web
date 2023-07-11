<?php
$msg="";
if(isset($_POST['signupbutton'])){
    $name=$_POST['signupfullname'];
    $email=$_POST['signupemail'];
    $pass=$_POST['signuppassword'];
    $gen=$_POST['signupgender'];
    $mobile=$_POST['signupmobile'];
    $dob=$_POST['signupdob'];
    $role='client';
    
    
    $con= mysqli_connect("localhost","root","","eshopdb");
   $qry ="insert into usermaster(user_name,user_email,user_pwd,user_gender,user_mobile,user_dob,role) values('$name','$email','$pass','$gen',$mobile,'$dob','$role')";
   mysqli_query($con, $qry);
   
   
   if(mysqli_affected_rows($con)>0)
       $msg="data inserted";
       else 
           $msg="Signup failed";
           mysqli_close($con);
    
}

?>




<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                margin-left: 500px;
                margin-top: 200px;
            }
            </style>
    </head>
    <body>
      <form method="post">
  <table style="background-color: #f2f2f2; padding: 20px;">
    <tr>
      <td><label for="fullname">Full Name:</label></td>
      <td><input type="text" id="fullname"name="signupfullname" style="width: 200px; margin-bottom: 30px;"></td>
    </tr>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" id="email"name="signupemail" style="width: 200px; margin-bottom: 30px;"></td>
    </tr>
    <tr>
      <td><label for="password">Password:</label></td>
      <td><input type="password" id="password"name="signuppassword" style="width: 200px; margin-bottom: 30px;"></td>
    </tr>
    <tr>
      <td><label for="repeatpassword">Repeat Password:</label></td>
      <td><input type="password" id="repeatpassword"name="signuprepeatepassword" style="width: 200px; margin-bottom: 30px;"></td>
    </tr>
    <tr>
      <td><label for="gender">Gender:</label></td>
      <td>
        <select name="signupgender" id="gender" style="width: 200px; margin-bottom: 30px;">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label for="mobile">Mobile Number:</label></td>
      <td><input type="tel" id="mobile"name="signupmobile" style="width: 200px; margin-bottom: 10px;"></td>
    </tr>
    <tr>
      <td><label for="dob">Date of Birth:</label></td>
      <td><input type="date" id="dob" name="signupdob"style="width: 200px; margin-bottom: 10px;"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit"name="signupbutton" value="Sign Up" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;"></td>
    </tr>
  </table>
</form>
        <?php
        echo"$msg";
        ?>
    </body>
</html>
