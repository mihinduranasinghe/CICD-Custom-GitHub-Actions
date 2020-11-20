<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

#for getting inputs from
var_dump($argv);
var_dump($_ENV);

$response = Requests::post($_ENV['INPUT_SLACK_WEBHOOK'],
    array(
        'Content-type'=> application/json
    ),

    json_encode(array(
        array(
            'type' => 'section',
            'text' => $_ENV['INPUT_MESSAGE']
        ),
        array(
            'type' => 'section',
            'fields'=> array(
                array(
                    'type' => 'mrkdwn',
                    'text' => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",                          
                    ),
                array(
                    'type' => 'mrkdwn',
                    'text' => "*Repository:*\n{$_ENV['GITHUB_EVENT_NAME']}",                          
                    ),
                array(
                    'type' => 'mrkdwn',
                    'text' => "*Repository:*\n{$_ENV['GITHUB_SHA']}",                          
                    ),             
    ),
  ),
    ))

);

var_dump($response);
echo "::group::Some expendable slack response\n";
var_dump($response);
echo "::endgroup::\n";

if(!$response -> success){
    echo $response->body;
    exit(1);
}



// ----
    //         array(
    //             'type' => 'section',
    //             'fields'=> array(
    //                 array(
    //                     'type' => 'mrkdwn',
    //                     'text' => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",                          
    //                     ),
    //                 array(
    //                     'type' => 'mrkdwn',
    //                     'text' => "*Repository:*\n{$_ENV['GITHUB_EVENT_NAME']}",                          
    //                     ),
    //                 array(
    //                     'type' => 'mrkdwn',
    //                     'text' => "*Repository:*\n{$_ENV['GITHUB_SHA']}",                          
    //                     ),             
    //     ),
    //   ),
  