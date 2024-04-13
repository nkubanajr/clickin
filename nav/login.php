<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
      body {
          font-family: Arial ;
          margin: 0;
    padding: 0;
    height: 100vh;
    background-color:  rgb(8, 8, 8);
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  form{
    position: relative;
    width: 300px;
    background-color: rgba(255, 255, 255, 0.9); 
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  }
  
  form h2 {
            margin-top: 0;
            color: rgb(142, 90, 11);
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration-line: overline;
            font-size: 40px
  }
  
  .form-group {
      margin-bottom: 15px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 95%;
        padding: 8px ;
        border-radius: 3px;
        border: 1px solid #ccc;
        outline: none;
        margin-right: 20px;
        
      
        
    }
    
    button {
        width: 100%;
        padding: 10px;
        background-color: rgb(6, 6, 6);
        color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  .signup-link {
    text-align: center;
    margin-top: 15px;
  }
  
  .signup-link a {
    color:  rgb(142, 90, 11);
    text-decoration: none;
}
  
  .signup-link a:hover {
    text-decoration: underline;
  }
  

    </style>
</head>
    <body>
        <center>
            <form method="post">
            <h2>Clickin</h2>
            <label>Username</label>
            <input type="text" name="uname" class="username" required><br><br>
            <label>Password</label>
              <input type="password" name="password" class="username" required><br><br>
            <button type="submit" name="submit" class="submit">Login</button><br><br>
            Don't have an account yet <a href="signup.php" class="signup">sign up</a>
</form>









        
        <?php
        session_start();
        
        $conn=mysqli_connect("localhost","root","","clickin");
    
        if (isset($_POST['submit'])) {
        
        $uname=$_POST['uname'];
        $pswrd=md5($_POST['password']);
        

        $select="SELECT * from users WHERE username='$uname' AND password='$pswrd'";
         
        $result=mysqli_query($conn,$select);
        
        $data= mysqli_fetch_assoc($result);
        $name= $data['names'];
        $role=$data['userrole'];

        $_SESSION['name']=$name;
        $_SESSION['role']=$role;
    if ($result) {

            if (mysqli_num_rows($result)==1) {
                echo'<script>
                alert("welcome back")
                window.location.href="index.php"
                </script>';
            }
            else {
                echo'<script>
                alert("incorrect login please sign up")
                window.location.href="signup.php";
                </script>';
            }

        

    }
    else {
        echo"TRY AGAIN";
    }



}else{
  
}  
?>
<?php
// session_start();

// Dummy array of clients
$clients = array(
    'user1' => 'password1',
    'user2' => 'password2',
    // Add more clients as needed
);

// Admin credentials
$admin_username = 'admin';
$admin_password = '123';

// Check if the user is already logged in
if (isset($_SESSION['uname'])) {
    // User is already logged in, redirect to report page
    header("Location: report.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['password'];

    // Check if username and password are valid
    if ($username === $admin_username && $password === $admin_password) {
        // Admin login, set session variables and redirect to report page
        $_SESSION['uname'] = $username;
        header("Location: report.php");
        exit();
    } elseif (isset($clients[$username]) && $clients[$username] == $password) {
        // Regular user login, set session variables and redirect to report page
        $_SESSION['uname'] = $username;
        header("Location: report.php");
        exit();
    } else {
        // Invalid credentials, show error message
        $error = "Invalid username or password";
    }
}
?>


    

        ?>
   

</center>
    </body>
</html>