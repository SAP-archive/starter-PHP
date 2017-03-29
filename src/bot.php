<?php
/*
 * bot.php
 * In this file, received message will be transformed with Recast.AI SDK
 *
 * The Recast.AI SDK will handle message and call your reply bot function
 */

use RecastAI\Client;

require_once 'config.php';

/*
 * Import your reply bot function (replyMessage)
 */
require_once 'message.php';

/*
 * Main bot function
 * It takes body of the request
 * And optionally, the response object of your server
 */
function bot ($body, $response = NULL) {
  /*
  * Instantiate Recast.AI SDK, just for connect service
  */
  $connect = Client::Connect($_ENV["REQUEST_TOKEN"], $_ENV["LANGUAGE"]);

  $connect->handleMessage($body, 'replyMessage');

  return $response;
}
