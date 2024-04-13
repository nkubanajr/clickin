<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    font-family:arial;
}
         .nav{
           
           position: fixed;
           top: 0;
           left: 0;
           width: 100%;
           display: flex;
           justify-content: space-between;
           padding: 20px 10px 0.5px 10px;
           box-sizing: border-box;
           background-color: black;
           
            
            
           
        }
        .logo h1{
            color: rgb(142, 90, 11);
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration-line: overline;
            font-size: 20px;
            text-align:center;
            margin-bottom:10px;
            margin-top:5px;
        }
        .nav a{
            color:rgb(253, 251, 251);
            padding:20px 15px;
            font-size: 20px;                                                                                                                                            
            outline: none;
            text-decoration:none;
            align-items:left;
            margin-left: 10px;
            
           


            
           
            
            
        }
        .nav .who a:hover{
         color:gray;
         text-decoration:underline;
            text-underline-offset: 1rem;  
            text-decoration-color:gray ; 
        }
        .logo{
            font-size: 20px;
          margin-left:20px;
          align-items: center;
          color: aliceblue;
          

        
        }
        .nav .logout{
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <nav>

        
        <div class="nav">
            <div class="logo">
                <h1>Clickin</h1>
                
            </div>
            <div class="who">
                
                <a href="index.php">Home </a>
                <a href="artist.php">Artists</a>
                <a href="about.php">About</a>
            </div>
            <div class="logout">
                <a href="logout.php"><img src="./icons/logout.png" alt=""></a>
                
            </div>
        </nav>
        </body>
        </html>