
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    
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
    <?php
    session_start();
    $conn= mysqli_connect("localhost","root","","clickin");
        if (isset($_POST['submit'])) {
        
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $pswrd=md5($_POST['pswrd']);
    $email=$_POST['email'];

    $_SESSION['name']=$name;
    $_SESSION['password']=$pswrd;
    $_SESSION['email']=$email;

    $usercheck="SELECT username from users WHERE username='$uname'";
         
    $resultuserchack=mysqli_query($conn,$usercheck);

    
        if(mysqli_num_rows($resultuserchack) == 1){
            echo'<script>
                alert("username already exists");
                window.location.href="signup.php";
                </script>';
        }
        else {
        $insert="INSERT INTO users(id, name, username, email, password) values('','$name','$uname','$email','$pswrd')";
    
            $result= mysqli_query($conn,$insert);
            if ($result) {
                echo'<script>
                alert("welcome to clickin");
                window.location.href="index.php"
                </script>';
            }
            else {
                echo'<b>PROBLEM INSERTING DATA</b>';
            }
    }
    
    



}
    ?>
</head>
    <body>
        <center>
            <form method="post">
            <h2>Clickin</h2>
            <label>Name:</label>
               <input type="text" name="name" class="username-bar" value="<?php if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
            }?>" required><br><br>
            <label>username:</label>
               <input type="text" name="uname" class="username-bar" required></label><br><br>
            <label>Email:</label>
              <input type="email" name="email" class="username-bar" value="<?php if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
            }?>" required>
            <br><br>
            <label>Password: </label>
              <input type="password" name="pswrd" class="username-bar" value="<?php if (isset($_SESSION['password'])) {
            echo $_SESSION['password'];
            }?>" required><br><br>
            <button type="submit" name="submit" class="submit-btn">Signup</button><br><br>
            Already Have An Account? <a href="login.php" class="signup">login</a>
</form>        









</center>

    </body>
</html>
