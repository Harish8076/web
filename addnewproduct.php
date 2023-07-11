
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


if(isset($_POST['addnewproductsignupbutton'])){
    
    
     $pid=$_POST['addnewproductid'];
     
     $pname=$_POST['addnewproductname'];
     
     $ptype=$_POST['addnewproducttype'];
     
     $pprice=$_POST['addnewproductprice'];
     $path="";
     if($_FILES['addnewproductfile']['error']==0){
         
            if($_FILES['addnewproductfile']['type']=="image/jpg"||$_FILES['addnewproductfile']['type']=="image/png"||$_FILES['addnewproductfile']['type']=="image/jpeg"){
           
         
     $sou=$_FILES['addnewproductfile']['tmp_name'];
     $des=$_SERVER['DOCUMENT_ROOT']."/new1/images/".$_FILES['addnewproductfile']['name'];
         if(move_uploaded_file($sou,$des)){
                 $path="images/".$_FILES['addnewproductfile']['name'];
                 $con= mysqli_connect("localhost","root","","eshopdb");
                 $query="insert into productmaster values($pid,'$pname','$pprice','$ptype','$path')";
                     mysqli_query($con,$query);
                     
                     if(mysqli_affected_rows($con)>0)
                     {
                     
                         
                     $msg="successful";
                     }
            
      else
          $msg="file corrupted";
      mysqli_close($con);
            }
            else{
                $msg="error uploading";
            }
     }
}
else {
    
$msg="corropted";

 }
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
                
                
                margin-top: 120px;
                
              
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
                width:590px;
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
            .messagestyle{
                margin-left: 600px;
                
                color:black;
                padding:10px;
                
            }
           
        </style>
    </head>
    <body>
       
         <form method="post"enctype="multipart/form-data">
        <table>
            <tr><td>  <h2><center>Add New Product</center></h2></td></tr>
            
       
            <tr><td> Product ID</td>
                <td><input type="text"name="addnewproductid"placeholder="Product ID"></td></tr>
            <tr><td>
                   Product Name</td>
                <td><input type="text"name="addnewproductname"placeholder="Product Name"></td></tr>
                    <tr><td>
           Product Price</td>
                <td><input type="number"name="addnewproductprice"placeholder="product price"></td></tr>
            <tr><td>
                   Product Type</td>
                        <td><select name="addnewproducttype"style="width:100px;">
                                <option></option>
                                <option>TV</option>
                                <option>Mobile</option>
                    
                                
                    </select></td></tr>
            
            <tr>
                <td>
                    Product Image
                </td>
                <td>
                    <input type="file" name="addnewproductfile">
                </td>
            
        </table>
            
        
        <div class="c1">
            <input type="submit"value="Add Product"name="addnewproductsignupbutton">
            <ram></ram>
           
              </div>
             </form>

        
        <?php
           echo"<div class='messagestyle'>$msg</div>";
           ?>
        
    </body>
</html>