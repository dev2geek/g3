<?php
require_once 'vendor/autoload.php';

use Guzzle\Http\Client;


$client = new Client('http://ata.taobao.ali.com', array(

   'curl.options' => array(
       CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_COOKIEFILE => './g.cookie',
       CURLOPT_COOKIEJAR => './g.cookie'
   )
));
$request = $client->get('/');
$response = $request->send();
echo $response->getBody();
