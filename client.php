<?php
include "./vendor/autoload.php";

$client = new WebSocket\Client("wss://demo.piesocket.com/v3/channel_1?api_key=oCdCMcMPQpbvNjUIzqtvF1d2X2okWpDQj4AwARJuAgtjhzKxVEjQU6IdCjwm&notify_self");
$client->text('Hello PieSocket!');

while (true) {
    try {
        $message = $client->receive();
        print_r($message);
        echo "\n";

      } catch (\WebSocket\ConnectionException $e) {
        // Possibly log errors
        print_r("Error: ".$e->getMessage());
    }
}
$client->close();
?>