<?php
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
$config = require_once 'config.php';

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
$app->get('/', function ($request, $response) {
  return bot($request, $response);
});

// Run Slim server
$app->run();
