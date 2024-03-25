<?php
$paymentStatus = 1;

switch ($paymentStatus){
    case 1:
        echo 'paid';
        break;
    case 2 :
    case 3 :
        echo 'Payment Declined';
        break;
    case 0:
        echo 'pending payment';
        break;
    default:
        echo 'unknown payment method';
}

echo '<br>';

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'paid',
    2,3 => 'Payment Declined',
    0 => 'pending payment',
    default => 'unknown payment method',
};

echo $paymentStatusDisplay;

// switch using ==
// match using ===