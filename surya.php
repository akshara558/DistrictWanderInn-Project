<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "hotels";
 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $checkIn = $_POST["check-in"];
        $checkOut = $_POST["check-out"];
        $adults = $_POST["adults"];
        $children = $_POST["children"];
        $roomType = $_POST["room-type"];
    
       
    $sql = "INSERT INTO suryahotel(name, email, phone, check_in, check_out, adults, children, room_type)
            VALUES ('$name', '$email', '$phone', '$checkIn', '$checkOut', $adults, $children, '$roomType')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
