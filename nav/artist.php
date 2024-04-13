
<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>artists</title>
<style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.632), rgba(0, 0, 0, 0.861)), url('./images/concert.jpg');
  background-size: auto;  

}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 60%;
  height: 60%;
  
  margin: auto;
  display: flex;
  height: 250px;
  padding: 0 20px;
  box-shadow: white;
  margin-bottom: 20px;
  padding: 10px 10px 10px;
  background-color:black;
  border-radius: 5px;
  /* justify-content:space-between; */
}
.container h2{
    color: white;
}
.container p{
    color: gray;
}

.image {
  width: 30%;
  height: 100%;
  background-size: cover;
  background-position: center;
  border-radius: 5px;
  margin-top: 20px;
  margin-bottom: 20px;
}

.text {
  width: 70%;
  padding-left: 20px;
  box-sizing: border-box;
}
.heading{
    color: aliceblue;
    font-family: arial;
    text-decoration: underline;
    text-underline-offset: 1rem; 
    text-align: center;
    margin-top:120px;
    font-size:10px;
    
    


}
.text a{
  margin-left:20px;
  text-decoration:none;
}
.book {
justify-content:space-between;
margin-bottom:40px;

}
.book a{
  color:black;
  border:1px solid black;
  background-color: white;
  padding:5px 15px 5px 15px;
  margin-left:360px;
  margin-bottom:140px;
  border-radius:5%;
}
.book a:hover{
  color:black;
  background:gray;
  border:1px solid gray;
}
</style>
</head>
<body>


    <div class="heading">
       <h1>ARTISTS.</h1> <br> <br> <br>

    </div>
  <div class="container">
    <div class="image" style="background-image: url('./images/Kanye.jpg');"></div>
    <div class="text">
      <h2>Ye.</h2>
      <p>Kanye West is a groundbreaking musician, fashion icon, and cultural provocateur. With innovative albums like "The College Dropout" and his Yeezy fashion line, he has reshaped both music and style. Kanye's influence on pop culture is immense</p>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrlFpkHqgtzdDzFHgbpJrSVPfjbPPfbhJZpFCcnxCmkLVnzgblMxnftZbhqkMbTRNBJVZL">
            <img src="./icons/email.png"  >
        </a>
        <a href="tel:0792528978">
            <img src="./icons/phone.png"style="width: 30px; height:30px;">
        </a>
        <div class=book>
  
          <a href="book.php">book</a> 
        </div>
      </div>
  </div>
  <div class="container">
    <div class="image" style="background-image: url('./images/Drake.jpg');"></div>
    <div class="text">
      <h2>Drake.</h2>
      <p>Drake, the Canadian rapper, singer, and songwriter, reigns as one of today's biggest music sensations. With chart-toppers like "Hotline Bling" and "God's Plan," he's garnered global acclaim. His seamless fusion of rap and R&B, coupled with introspective lyrics, has captivated millions</p>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrlFpkHqgtzdDzFHgbpJrSVPfjbPPfbhJZpFCcnxCmkLVnzgblMxnftZbhqkMbTRNBJVZL">
            <img src="./icons/email.png"  >
        </a>
        <a href="tel:0792528978">
            <img src="./icons/phone.png"style="width: 30px; height:30px;">
        </a>
        <div class=book>

          <a href="book.php">book</a> 
        </div>
    </div>
  </div>
  <div class="container">
    <div class="image" style="background-image: url('./images/frank.jpg');"></div>
    <div class="text">
      <h2>Frank Ocean.</h2>
      <p>
      Frank Ocean, the enigmatic singer-songwriter, captivates audiences with his soulful voice and introspective lyrics, Known for his critically acclaimed albums like "Blonde" and "Channel Orange," Ocean's music explores themes of love, identity, and vulnerability with profound depth.</p>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrlFpkHqgtzdDzFHgbpJrSVPfjbPPfbhJZpFCcnxCmkLVnzgblMxnftZbhqkMbTRNBJVZL">
            <img src="./icons/email.png"  >
        </a>
        <a href="tel:0792528978">
            <img src="./icons/phone.png"style="width: 30px; height:30px;">
        </a>
        <div class=book>
    
          <a href="book.php">book</a> 
        </div>
      </div>
    </div>
  <div class="container">
    <div class="image" style="background-image: url('./images/party.jpg');"></div>
    <div class="text">
      <h2>Partynextdoor.</h2>
      <p>
PartyNextDoor, the Toronto-based artist and producer, crafts hypnotic R&B-infused tracks that seamlessly blend emotive melodies with atmospheric beats. Known for his introspective lyrics and seductive vocals, he creates an immersive sonic experience that resonates with listeners. </p>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrlFpkHqgtzdDzFHgbpJrSVPfjbPPfbhJZpFCcnxCmkLVnzgblMxnftZbhqkMbTRNBJVZL">
            <img src="./icons/email.png"  >
        </a>
        <a href="tel:0792528978">
            <img src="./icons/phone.png"style="width: 30px; height:30px;">
        </a>
        <div class=book>

          <a href="book.php">book</a> 
        </div>
    </div>
  </div>
  <div class="container">
    <div class="image" style="background-image: url('./images/future.jpg');"></div>
    <div class="text">
      <h2>Future.</h2>
      <p>Future, the Atlanta-based rapper and trap music pioneer, is renowned for his distinctive auto-tuned vocals, infectious hooks, and introspective lyrics. With chart-topping hits like "Mask Off" and "Jumpman," he has solidified his status as one of hip-hop's most influential figures. </p>
      <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrlFpkHqgtzdDzFHgbpJrSVPfjbPPfbhJZpFCcnxCmkLVnzgblMxnftZbhqkMbTRNBJVZL">
            <img src="./icons/email.png"  >
        </a>
        <a href="tel:0792528978">
            <img src="./icons/phone.png"style="width: 30px; height:30px;">
        </a>
        <div class=book>

          <a href="book.php">book</a> 
        </div>
    </div>
  </div>
</body>
</html>
