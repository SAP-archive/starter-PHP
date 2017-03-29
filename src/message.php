<?php

use RecastAI\Client;

require_once 'config.php';

/*
* message.js
* This file contains your bot code
*/
function replyMessage ($message) {
  /*
  * Instantiate Recast.AI SDK, just for connect service
  */
  $request = Client::Request($_ENV["REQUEST_TOKEN"]);

  /*
  * Get text from message received
  */
  $text = $message->content;

  /*
  * Get senderId to catch unique conversation_token
  */
  $senderId = $message->senderId;

  /*
  * Call Recast.AI SDK, through /converse route
  */
  $response = $request->converseText($text, [ 'conversation_token' => $senderId ]);

  /*
  * Here, you can add your own process.
  * Ex: You can call any external API
  * Or: Update your DB
  * etc...
  */

  /*
  * Add each replies received from API to replies stack
  */
  foreach ($response->replies as $reply) {
    $message->addReply([(object)['type' => 'text', 'content' => $reply]]);
  }

  $message->reply();
}
