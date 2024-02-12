<?php
header('Content-type: application/json');

$response = json_decode(file_get_contents("https://api.binance.com/api/v3/ticker/price"), true);

foreach ($response as $name => $currency) {
    $aj[$currency['symbol']] = [
        'Price' => $currency['price'],
    ];
    
}
echo json_encode($aj, 448);
?>
