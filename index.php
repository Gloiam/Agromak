<!DOCTYPE html>
<html>
<head>
  <title>registration</title>
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
 
  </div>
  <div id="content">
    <h1><span class="pato">Welcome to AGROMAK</span></h1>
    <div class="centered-interface">
      <div class="interface-box" id="login">
        <!-- Login Interface Content -->
        <h3>Please login</h3>
        <form method="POST" action="index.php">
<div class="form-group">
        <label for="name">username:</label>
        <input type="text" id="name"name="username" required>
      </div>
      <div class="form-group">
        <label for="name">password:</label>
        <input type="text" id="name" name="password" required>
      </div>

      <button class="btn" type="submit"><a href="home.php">login</a></button>
    </form>

      </div>
    </div>
  </div>
</body>
</html>





