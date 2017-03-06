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
 */
function bot ($request, $response) {
  /*
  * Instantiate Recast.AI SDK, just for connect service
  */
  $connect = new RecastAI\Client($config['recast']['token'], $config['recast']['language']);

  // $connect->connect->handleMessage($request, $response, 'replyMessage');

  return $response;
}
