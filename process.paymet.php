<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paymentMethod = $_POST['paymentMethod'];

    if ($paymentMethod === 'card') {
        $cardType = $_POST['cardType'];
        $cardNumber = $_POST['cardNumber'];
        $expirationDate = $_POST['expirationDate'];
        $cvv = $_POST['cvv'];

        
        if ($cardType && $cardNumber && $expirationDate && $cvv) {
           
            echo "Credit card payment successful! Thank you for your reservation.";
        } else {
            echo "Credit card payment failed. Please check your details and try again.";
        }
    } elseif ($paymentMethod === 'gcash') {
        $gcashNumber = $_POST['gcashNumber'];

        
        if ($gcashNumber) {
            echo "GCash payment successful! Thank you for your reservation.";
        } else {
            echo "GCash payment failed. Please check your details and try again.";
        }
    } else {
        echo "Invalid payment method.";
        exit;
    }
} else {
    
    echo "Invalid request.";
}
?>
