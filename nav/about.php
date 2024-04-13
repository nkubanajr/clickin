<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
            font-family:arial;
        }
        body{
            font-family: Arial, sans-serif;
             margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.632), rgba(0, 0, 0, 0.861)), url('./images/concert.jpg');
             
             
             background-repeat:no-repeat;
        }
        .img img{
            height:400px;
            width:450px;
            margin-top:170px;
            margin-left:30px;
            border-radius:5px;
            background-size:contain;
        }
        .text{
        
            color:aliceblue;
            width:50%;
            margin:auto;
            
        
            
        }
        .text p{
            color:gray;
        }
        .text h2{
         text-decoration:underline;
         text-underline-offset:1rem;
         
        }
        
        .about{
            display:flex;
            text-align:center;
            display:flex;
            flex-direction:row;
          
            
          


        }
        .ourmission{
            display:flex;
            flex-direction:row-reverse;
            text-align:center;
            margin-right:30px;
           
           
        }
        .whatweoffer{
            display:flex;
            flex-direction:row;
            /* margin-right:40px; */
            text-align:center;
           
           
        }
        .text img{
            width:70px;
            height:70px;
        }
        .text{
            margin-top:170px;
        }
       

    </style>
</head>
<body>
   
<section>
    
    
    <div class="about">
        <div class="img">
            
            <img src="./images/huh.jpg" alt=""> 
        </div>
        <div class="text">
            
            <h2>About.</h2> <br>
            <p style="color:white; font-size:25px;"> Connecting Events with Exceptional Talent</p><br>
                <p>Welcome to ClickIn, your premier destination for booking exceptional artists to elevate your events to unforgettable experiences. At ClickIn, we understand the transformative power of live performances and the profound impact they have on events of all scales.</p>
                
            </p><br><br><br>
               <img src="./icons/connect.png" alt="">           
        </div>
    </div>  
</section>  
<section>

        <div class="ourmission">
            <div class="img">
                
                <img src="./images/huh.jpg" alt=""> 
            </div>
            <div class="text">
                
                <h2>Our Mission.</h2> <br><br>
                <p style="color:white; font-size:25px;">Bridge to talented  artists and event creators</p><br>
                <p>facilitating seamless connections that bring visions to life. We strive to empower event planners, festival organizers, corporate entities, and individuals alike to effortlessly discover and book the perfect performers for their unique occasions.</p>
                
                  </p><br><br> 
                  <img src="./icons/bridge.png" alt="">  
            </div>    
        </div>
    </section>  
    <section>
        
        <div class="whatweoffer">
            <div class="img">
                
                <img src="./images/huh.jpg" alt=""> 
            </div>
            <div class="text">
                
                <h2>What We Offer.</h2> <br>  
                <p style="color:white; font-size:25px;">Diverse artists across various genres</p><br>
                <p>ensuring that we have the perfect match for every event, whether it's a corporate gala, a music festival, a wedding, or any other special gathering. From world-renowned musicians and captivating dancers to mesmerizing magicians and captivating visual artists, our platform showcases a plethora of talent waiting to transform your event into an unforgettable spectacle.</p>
                
              </p><br><br><br>   
              <img src="./icons/diverse.png" alt="">    
             </div>
        
        
         </div>  
         <br><br><br><br>
</section>  
</body>
</html>
<?php
include('footer.php')
?>