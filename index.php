<?php 
$webhookurl = "Your Webhook";
$ip = $_SERVER['REMOTE_ADDR'];
$useragent= $_SERVER['HTTP_USER_AGENT'];
$date = date("d:m:Y - H:i", time());

$mess = "**Logs**
**IP:** `$ip`
**UserAgent:** `$useragent`
**Date:** `$date`";

$data = array ('content'=>"$mess");
$make = json_encode($data);

$post = curl_init( $webhookurl );
curl_setopt( $post, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $post, CURLOPT_POST, 1);
curl_setopt( $post, CURLOPT_POSTFIELDS, $make);
curl_setopt( $post, CURLOPT_FOLLOWLOCATION, 1);
$response = curl_exec( $post );


?>

<html>
    <head>
        <title>Your title</title>
    </head>

    <body>
        <h1>Welcome to my website</h1>
    </body>

</html>
