



<?php
session_start();
if(isset($_SESSION['role']))
{
    if($_SESSION['role']!='admin')
        
    header("location:index.php");
    
    
}
else{
    header("location:signin.php");
}
?>






<?php
$msg="";
if(isset($_POST['addnewuserbutton'])){
    $aname=$_POST['addnewfullname'];
    $aemail=$_POST['addnewsignupemail'];
    $apass=$_POST['addnewsignuppassword'];
    $agen=$_POST['addnewsignupgender'];
    $emob=$_POST['addnewsignupmobile'];
    $edob=$_POST['addnewsignupdob'];
    $role=$_POST['addnewusertype'];
    
    $con= mysqli_connect("localhost","root","","eshopdb");
    $qry="insert into usermaster(user_name,User_email,user_pwd,user_gender,user_mobile,user_dob,role)values('$aname','$aemail','$apass','$agen','$emob','$edob','$role')";
    
    mysqli_query($con,$qry);
    
    
    if(mysqli_affected_rows($con)>0)
        $msg="Added new $aname suceessfully";
    else
        $msg="Adding New User Failed";
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
                background-color: rgb(90,90,90);
               color:white;
               padding:30px;
                
                border-spacing: 30px;
                margin-left: 400px;
                
                
                margin-top: 20px;
                
              
            }
            tr,td{
                text-align: center;
                cellpadding:20px;
                cell-spacing:30px;
                
            }
            input[type="submit"]{
                
                background-color: green;
                font-size: 20px;
               
            }
            h2{
                color:black;
            }
            input[type="submit"]{
               
                margin-top:0px; 
                margin-left: 300px;
                
            }
            .c1{
                background-color: rgb(90,90,90);
                width:468px;
                margin-left: 400px;
                margin-top: 0px;
                
              
            }
            a{
               margin-left: 256px;
                background-color: rgb(90,90,90);
                width:416px;
                color:yellow;
                text-decoration:none;
            }
            center{
                color:red;
            }
            
           
        </style>
    </head>
    <body>
        
         <form method="post">
        <table>
            <tr><td>  <h2><center>Add new User</center></h2></td></tr>
            
            <div class="class">
            <tr><td> Name</td>
                <td><input type="text"name="addnewfullname"placeholder="enter your good name"></td></tr>
            <tr><td>
                    E-mail</td>
                <td><input type="email"name="addnewsignupemail"placeholder="enter your email"></td></tr>
            <tr><td>
                    Password</td>
                <td><input type="password"name="addnewsignuppassword"placeholder="password"></td></tr>
            <tr><td>
            Conform Password</td>
                <td><input type="password"name="addnewsignupconformpassword"placeholder="repeate password"></td></tr>
            <tr><td>
                    Gender</td>
                <td> <input type="radio"name="addnewsignupgender"value="male">Male
                    <input type="radio"name="addnewsignupgender"value="female">Female</td></tr>
            
            <tr><td>Mobile Number </td><td><input type="number" name="addnewsignupmobile"placeholder="enter mobile number"></td></tr>
            
            <tr><td>Date OF Birth</td>
                <td> <input type="date"name="addnewsignupdob"></td></tr>
            
            
            <tr><td>User Type(Role)</td>
                <td> <select name="addnewusertype" style="width:120px;"><option>Admin</option>
                             <option>client</option>
      
                    </select>
                </td></tr>
            
           
        </table>
            
        
        <div class="c1">
            <input type="submit"value="ADD"name="addnewuserbutton">
            <ram></ram>
              </div>
             </form>
         <?php
            echo"$msg";
            ?>
 
      
        
        
        
    </body>
</html>































