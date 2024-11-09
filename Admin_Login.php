<?php
session_start();
require("Connection.php"); 
?>
<html>
    <head>
        <title>Admin Login Panel</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <title>Document</title>
        </head>
        <body>
            <div class="container">
                <div class="myform">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                        <h2>ADMIN LOGIN</h2>
                        <input type="text" placeholder="Admin Name" name="AdminName">
                        <input type="passsword" placeholder="Password" name="AdminPass">
                        <button type="submit" name="Login">LOGIN</button>
</form>
</div>
</div>
<?php
function input_filter($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
if(isset($_POST['Login'])){
   
    $AdminName=input_filter($_POST['AdminName']);
    $AdminPass=input_filter($_POST['AdminPass']);

    $AdminName=mysqli_real_escape_string($con,$AdminName);
    $AdminPass=mysqli_real_escape_string($con,$AdminPass);

    $query5="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";
   if($stmt1= mysqli_prepare($con,$query5)){
          mysqli_stmt_bind_param($stmt1,"ss",$AdminName,$AdminPass);
          mysqli_stmt_execute($stmt1);
          mysqli_stmt_store_result($stmt1);
          if(mysqli_stmt_num_rows($stmt1)==1){
          $_SESSION['AdminLoginId']=$AdminName;
          echo"<script> window.location.href='Admin_Panel.php'
          </script>";
          }
          else{
           echo"<script>
           alert('Invalid')</script>";
          }
   mysqli_stmt_close($stmt1);}
   else{
       echo"not";
   }} 
?>