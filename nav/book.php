
<?php
include('navbar.php');
?>


<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Booking Form</title>
 
  <style>
    body {
      font-family: Arial;
      margin: 0;
      padding: 0;
      background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.632), rgba(0, 0, 0, 0.861)), url('./images/concert.jpg');
      
    }
    .container {
      max-width: 600px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background:white;
      margin-top:90px;
      margin-left:20%;
    }
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px 10px 20px;
      border-radius:5px;
    }
    h2{
        text-decoration:underline;
        text-underline-offset:1rem;
        text-align:center;
       
        
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>clickin Booking Form</h2><br><br><br><br>
        <form action="#" method="post">
            <div class="form-group">
                <label for="clientName">Name:</label>
                <input type="text" id="clientName" name="name" required>
            </div>
            <div class="form-group">
                <label for="clientEmail">Email:</label>
                <input type="email" id="clientEmail" name="email" required>
            </div>
            <div class="form-group">
                <label for="clientPhone">Phone Number:</label>
                <input type="tel" id="clientPhone" name="phone" required>
            </div>
            <div class="form-group"><br>
                <label for="eventName">Event Name:</label>
                <input type="text" id="eventName" name="eventname" required>
            </div>
            <div class="form-group"><br>
                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" name="eventdate" required>
            </div>
            <div class="form-group"><br>
                <label for="eventTime">Event Time:</label>
                <input type="time" id="eventTime" name="eventtime" required>
            </div>
            <div class="form-group"><br>
                <label for="eventLocation">Event Location:</label>
                <input type="text" id="eventLocation" name="eventlocation" required>
            </div>
            <div class="form-group"><br>
                <label for="artistName">Artist Name:</label>
                <input type="text" id="artistName" name="artistname" required>
            </div>
            <div class="form-group"><br>
                <label for="preferredDate">Preferred Date(s):</label>
                <input type="date" id="preferredDate" name="preferreddate" required>
            </div>
            <div class="form-group"><br>
                <label for="price">Offered Price:</label>
                <input type="number" id="price" name="price" min="1000" required>
            </div>
            <div class="form-group"><br>
                <label for="additionalTerms">Additional Terms/Conditions:</label>
                <textarea id="additionalTerms" name="additionalterms" rows="4"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <?php


// Create connection
$conn = mysqli_connect('localhost','root' , '', 'artist_booking');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $event_name = $_POST['eventname'];
    $event_date = $_POST['eventdate'];
    $event_time = $_POST['eventtime'];
    $event_location = $_POST['eventlocation'];
    $artist_name = $_POST['artistname'];
    $preferred_dates = $_POST['preferreddate'];
    $offered_price = $_POST['price'];
    $terms_conditions = $_POST['additionalterms'];

    // Insert data into database
    $sql = "INSERT INTO bookings (name, email, phone, event_name, event_date, event_time, event_location, artist_name, preferred_dates,offered_price, terms_conditions) 
            VALUES ('$name', '$email', '$phone', '$event_name', '$event_date', '$event_time', '$event_location', '$artist_name', '$preferred_dates', '$offered_price', '$terms_conditions')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert booked your artist successfully;
        window.location.href"artist.php";
        </script>';
    } else {
        echo '<script>
        alert artist not booked;
        window.location.href"book.php";
        </script>';
    }
}

// Close connection
$conn->close();
?>

</body>
</html>

