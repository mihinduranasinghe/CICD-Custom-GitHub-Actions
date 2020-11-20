<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

#for getting inputs from workflow
var_dump($argv);
var_dump($_ENV);

// $response = Requests::post("https://hooks.slack.com/services/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",
//     array(
//         'Content-type'=> application/json
//     ),
//     json_encode(array(
//         'text' => 'Some message from php script'
//     ))

// );

// var_dump($response);

// if(!response -> success){
//     echo $response->body;
// }