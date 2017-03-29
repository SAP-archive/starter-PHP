<?php
error_reporting(E_ALL);
/*
* server.php
* This file is the core of your bot
*
* It creates a little server using Slim
* So, your bot can be triggered thought "/" route
*/

/*
* Import dependencies
*/
require 'vendor/autoload.php';

/*
* Import main bot function
*/
require_once 'config.php';

/*
* Import main bot function
*/
require_once 'bot.php';

/*
* Start Slim server
*/
$app = new \Slim\App();

/*
* Handle / route
*/
$app->post('/', function ($request, $response) {
  return bot($request->getBody()->getContents(), $response);
});

// Run Slim server
$app->run();
