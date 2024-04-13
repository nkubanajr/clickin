
    
    
    <?php


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'artist_booking');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all booking data
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin:auto;
            
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
    </style>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    a{
        color:black;
        text-decoration:none;
        border:1px solid black;
        padding:10px 30px 10px 30px;
        border-radius:5px;
        background:gray;
        margin-left:515px;
    }
    </style>
</head>
<body>
    
<h2>Welcome</h2>
   
    <a href="logout.php">Logout</a><br><br>

    <h2>Booking Report</h2>

<?php
if ($result->num_rows > 0) {
    // Output table header
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Event Name</th><th>Event Date</th><th>Event Time</th><th>Event Location</th><th>Artist Name</th><th>Preferred Dates</th><th>Offered Price</th><th>Terms & Conditions</th><th>Created At</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["event_name"] . "</td>";
        echo "<td>" . $row["event_date"] . "</td>";
        echo "<td>" . $row["event_time"] . "</td>";
        echo "<td>" . $row["event_location"] . "</td>";
        echo "<td>" . $row["artist_name"] . "</td>";
        echo "<td>" . $row["preferred_dates"] . "</td>";
        echo "<td>" . $row["offered_price"] . "</td>";
        echo "<td>" . $row["terms_conditions"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No bookings found";
}

// Close connection
$conn->close();
?>


</body>
</html>