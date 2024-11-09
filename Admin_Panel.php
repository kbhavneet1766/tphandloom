<?php
require("Connection.php");
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId'])){
    header("location: Admin_Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panelt</title>
<style>
  body{
    margin:0;
  }
  div.header{
    color: #f0f0f0;
    font-family: poppins;
    display: flex;
    flex-direction:row;
    align-items:center;
    justify-content:space-between;
    padding:0 60px;
    background-color:darkcyan;
  }
  div.header button{
    background-color: #f0f0f0;
    font-size: 16px;
    font-weight: 50;
    padding: 8px 12px;
    border: 2px solid black;
    border-radius: 5px;
  }
  table,th,td{
    padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
  }
  </style>
</head>
<body>
    <div class="header">
        <h2>ADMIN PANEL - <?php echo htmlspecialchars($_SESSION['AdminLoginId']) ?>
</h2>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<button type="submit" name="Logout">LOG OUT</button>
</form>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
        <table class="table text-center table-dark " style="border: 1px solid black;border-collapse:collapse;">
  <thead>
    <tr>
      <th scope="col" style="width:15%;background-color:black;color:white;">Order ID</th>
      <th scope="col" style="width:15%;background-color:black;color:white;">Customer Name</th>
      <th scope="col" style="width:15%;background-color:black;color:white;">Phone No</th>
      <th scope="col" style="width:15%;background-color:black;color:white;">Address</th>
      <th scope="col" style="width:15%;background-color:black;color:white;">Pay Mode</th>
      <th scope="col" style="width:15%;background-color:black;color:white;">Orders</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query="SELECT * FROM `order_manager`";
    $user_result=mysqli_query($con,$query);
    while($user_fetch=mysqli_fetch_assoc($user_result)){
      echo"<tr>
      <td  align='center'>$user_fetch[Order_Id]</td>
        <td  align='center'>$user_fetch[Full_Name]</td>
        <td  align='center'>$user_fetch[Phone_No]</td>
        <td  align='center'>$user_fetch[Address]</td>
        <td  align='center'>$user_fetch[Pay_Mode]</td>
        <td> <table class='table text-center table-dark ' >
        <thead>
          <tr>
            <th scope='col' style='width:15%;background-color:black;color:white;'>Item Name</th>
            <th scope='col' style='width:15%;background-color:black;color:white;'>Price</th>
            <th scope='col' style='width:15%;background-color:black;color:white;'>Quantity</th>
          </tr>
        </thead> 
        <tbody>";
        $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
        $order_result=mysqli_query($con,$order_query);
        while($order_fetch=mysqli_fetch_assoc($order_result)){
          echo"
        <tr>
        <td>$order_fetch[Item_Name]</td>
        <td>$order_fetch[Price]</td>
        <td>$order_fetch[Quantity]</td>
        </tr>";
        }
        echo" </tbody>
        </table>
        </td>
      </tr>";
     
    }
    ?>
    
  </tbody>
</table>
</div>
</div>
</div>
<?php
if(isset($_POST['Logout'])){
    session_destroy();
    header("location: Admin_Login.php");
}
?>
</body>
</html>