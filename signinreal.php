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
                
                
                margin-top: 100px;
                
              
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
            .be1{
                background-color: rgb(90,90,90);
                width:405px;
                margin-left: 400px;
                margin-top: 0px;
                
              
            }
            a{
               margin-left: 240px;
                background-color: rgb(90,90,90);
                width:416px;
                color:yellow;
                text-decoration:none;
            }
            input[type="checkbox"]{
                margin-left: 30px;
                color:white;
                margin-top:0px;
            }
        </style>
    </head>
    <body>
       
         <form>
        <table>
            <tr><td>  <h2>Sign Up</h2></td></tr>
            
       
            <tr><td>  UserName</td>
                <td><input type="text"name="signinfullname"placeholder="enter your good name"></td></tr>
            
            <tr><td> Password</td>
                <td><input type="password"name="signinpassword"placeholder="password"></td></tr>
            
        
        </table>
            
        </form>
        <div class="be1">
        
           <input type="checkbox"name="signincheckbox">Rember Me!
           
           
        
            <input type="submit"value="SignUp">
            <ram><a href="signup.php">Don't have an Account?</a></ram>
        </div>
         
        
        
    </body>
</html>