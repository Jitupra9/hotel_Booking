<?php
require('vendor/autoload.php');  // Include Razorpay SDK

// Your Razorpay API credentials
$api = new Razorpay\Api\Api('your_key_id', 'your_key_secret');

// Get the payment ID from the frontend
$payment_id = $_POST['razorpay_payment_id'];

try {
    // Fetch payment details
    $payment = $api->payment->fetch($payment_id);

    // Capture the payment
    $payment->capture(array('amount' => $payment->amount));

    // Payment was successful
    echo "Payment Successful!";
    // Optionally, store payment details in the database
} catch (Exception $e) {
    // Payment failed
    echo "Payment failed: " . $e->getMessage();
}
?>
