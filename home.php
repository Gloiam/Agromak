<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
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
      max-width: 10%;
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

    button {
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
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
   
    

    /* Additional styles for the home page */
    #content {
      margin: 50px auto;
      text-align: center;
    }

    .welcome-text {
      font-size: 34px;
      font-weight: bold;
      color: white; /* Set the color of the text to white */
      background-color: #008000; /* Set the background color to blue */
      padding: 10px 20px; /* Add padding to give it a button-like appearance */
      border-radius: 50px; /* Add rounded corners */
      margin-bottom: 20px;
    }
  .welcome-text1 {
      font-size: 20px;
      font-weight: bold;
      color: white; /* Set the color of the text to white */
      background-color: #008000; /* Set the background color to blue */
      padding: 5px 20px; /* Add padding to give it a button-like appearance */
      border-radius: 50px; /* Add rounded corners */
      margin-bottom: 20px;
    }

    .home-btn {
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      margin: 0 10px;
    }


    /* New styles for the top right corner buttons */
    .top-right-buttons {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .sign-in-btn {
      background-color: #008000;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      margin: 0 10px;
    }

    .sign-up-btn {
      background-color: #008000;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      margin: 0 10px;
    }

    
    
  </style>
</head>
<body>
  <div id="content">
    <div class="top-right-buttons">
      <a class="sign-in-btn" href="login.php">Sign In</a>
      <a class="sign-up-btn" href="registration.php">Sign Up</a>
    </div>
<div class="logo">
      <img src="caro.jpg" alt="Logo">
    </div>
    <h1><span class="welcome-text">AGROMAK</span></h1>
    <p><span class="welcome-text1">LET'S FEED THE WORLD</span></p>
  </div>
</body>
</html>
