<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];
$numAdults = $_POST['numAdults'];
$numChildren = $_POST['numChildren'];
$numRooms = $_POST['numRooms'];

$sql = "INSERT INTO rooms (check_in_date, check_out_date, num_adults, num_children, num_rooms) 
        VALUES ('$checkInDate', '$checkOutDate', $numAdults, $numChildren, $numRooms)";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>