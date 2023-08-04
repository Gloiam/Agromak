<!DOCTYPE html>
<html>
<head>
  <title>payments</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
      background-image: url('bg.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .logo {
      text-align: center;
      margin-bottom: 10px;
    }

    .logo img {
      max-width: 60%;
      height: auto;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }

    .form-group {
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
    }

    input,
    textarea {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
    }
    #sidebar {
      background-color: #ffffff;
      height: 100vh;
      width: 200px;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px;
    }
    #content {
      margin-left: 220px;
      padding: 20px;
    }
    h1 {
      text-align: center;
      margin-top: 50px;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
    }
    a {
      text-decoration: none;
      color: #333;
    }
    .centered-interface {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }
    .interface-box {
      background-color: #f0f0f0;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 300px;
    }

    h3 {
      text-align: center;
      margin-top: 10px;
    }

    .signup-link {
      text-align: center;
      margin-top: 20px;
    }
.btn {
      display: block;
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #008000;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }


   
    }
    button {
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    

  button1 {
      padding: 10px;
      font-weight: bold;
      font-size: 16px;
      color: #36454f;
      background-color: #ffffff;
      border: none;
      border-radius: 5px;
      }
    
    /* Basic styling for the dropdown container */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Styling for the dropdown options */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    /* Styling for each option in the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .pato {
      font-size: 34px;
      font-weight: bold;
      color: white; /* Set the color of the text to white */
      background-color: #008000; /* Set the background color to blue */
      padding: 10px 20px; /* Add padding to give it a button-like appearance */
      border-radius: 50px; /* Add rounded corners */
      margin-bottom: 20px;
     }
  </style>
</head>
<body>
  <div id="sidebar">
    <div class="logo">
      <img src="caro.jpg" alt="Logo">
    </div>
    <h2 align="center">AGROMAK</h2>
    <ul> 
    
    <li><a href="registration.php">Register</a></li>
    <!-- Sample links for the administration panel -->
    <li><a href="login.php">Login</a></li>
    <li><a href="products.php">Products </a></li>
    <li><a href="payments.php"> Payments</a></li>
    <li><a href="admin.php">Logout</a></li>
    <!--more links -->
  </ul>
  </div>
  <div id="content">
    <h1><span class="pato">Welcome to AGROMAK</span></h1>
    <div class="centered-interface">
      <div class="interface-box" id="login">
        <!-- Login Interface Content -->
        <h3>Payments</h3>
        <form method="POST" action="payments.php">
        <div class="form-group">
        <label for="name">Payment Name:</label>
        <input type="text" id="payname" name="payname" required>
      </div>
      <div class="form-group">
        <label for="name">Quantity:</label>
        <input type="amount" id="amount" name="quantity" required>
      </div>
        <div class="form-group">
        <label for="name">Amount:</label>
        <input type="amount" id="amount" name="amount" required>
      </div>
      <div class="form-group">
        <label for="name">Date of Purchase:</label>
        <input type="date" id="amount" name="date" required>
      </div>

      
      <div class="form-group">
    <label for="fname">Sellers's Name:</label>
    <select name="user_id" id="username" required>
      <?php
      require_once "config.php";
      $selectFarmers = mysqli_query($conn, "SELECT * FROM farmer");
      while ($farmer = mysqli_fetch_assoc($selectFarmers)) {
        echo '<option value="' . $farmer["user_id"] . '">' . $farmer["username"] . '</option>';
      }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="fname">Product Name:</label>
    <select name="p_id" id="pname" required>
      <?php
      require_once "config.php";
      $selectProducts = mysqli_query($conn, "SELECT * FROM product");
      while ($product = mysqli_fetch_assoc($selectProducts)) {
        echo '<option value="' . $product["p_id"] . '">' . $product["pname"] . '</option>';
      }
      ?>
    </select>
  </div>

      <button class="btn" type="submit" name="submit">Submit</a></button>
    </form>
  
      </div>
    </div>
  </div>
</body>
</html>


<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $payname = mysqli_real_escape_string($conn, $_POST["payname"]);
    $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
    $amount = mysqli_real_escape_string($conn, $_POST["amount"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $p_id = mysqli_real_escape_string($conn, $_POST["p_id"]);
    $user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);

    // Perform the database insertion
    $query = "INSERT INTO payment (payname, quantity, amount, date, p_id, user_id) 
              VALUES ('$payname', '$quantity', '$amount', '$date', '$p_id', '$user_id')";

    if (mysqli_query($conn, $query)) {
        // Successful insertion
        echo "Data inserted successfully!";
    } else {
        // Error handling if insertion fails
        echo "Error: " . mysqli_error($conn);
    }
}
?>





