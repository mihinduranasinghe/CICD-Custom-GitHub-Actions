<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

#for getting inputs from
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



// ----

// <?php

// require_once 'vendor/autoload.php';
// Requests::register_autoloader();

// #for getting inputs from workflow
// // var_dump($argv);
// // var_dump($_ENV);

// $response = Requests::post($_ENV['INPUT_SLACK_WEBHOOK'],
//     array(
//         'Content-type'=> application/json
//     ),
//     json_encode(array(
//         array(
//             array(
//                 'type' => 'setion',
//                 'text'=>array(
//                     'type' => 'mrkdwn',
//                     'text' => $_ENV['INPUT_MESSAGE'],
//                     # $_ENV[you can populate any github object env variables also] 
//                 ),
//             ),

//     //         array(
//     //             'type' => 'setion',
//     //             'fields'=> array(
//     //                 array(
//     //                     'type' => 'mrkdwn',
//     //                     'text' => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",                          
//     //                     ),
//     //                 array(
//     //                     'type' => 'mrkdwn',
//     //                     'text' => "*Repository:*\n{$_ENV['GITHUB_EVENT_NAME']}",                          
//     //                     ),
//     //                 array(
//     //                     'type' => 'mrkdwn',
//     //                     'text' => "*Repository:*\n{$_ENV['GITHUB_SHA']}",                          
//     //                     ),             
//     //     ),
//     //   ),
//     ),
//    ),
//  ),
  
// );

// echo "::group::Some expendable slack response\n";
// var_dump($response);
// echo "::endgroup::\n";

// if(!$response -> success){
//     echo $response->body;
//     exit(1);
// }