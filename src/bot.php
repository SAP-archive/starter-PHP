<?php
/*
 * bot.php
 * In this file, received message will be transformed with Recast.AI SDK
 *
 * The Recast.AI SDK will handle message and call your reply bot function
 */

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
  $connect = new RecastAI\Connect($config['recast']['token'], $config['recast']['language']);

  $connect->handleMessage(['body' => $body], $response ? $response : [], 'replyMessage');

  return $response;
}
