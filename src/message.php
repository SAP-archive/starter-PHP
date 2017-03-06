<?php
/*
 * message.js
 * This file contains your bot code
 */
function replyMessage ($message) {
  /*
   * Instantiate Recast.AI SDK, just for connect service
   */
  $request = new RecastAI\Request($config['recast']['token']);

  /*
   * Get text from message received
   */
  $text = $message->content->attachment->content;

  /*
   * Get senderId to catch unique conversation_token
   */
  $senderId = $message->senderId;

  /*
   * Call Recast.AI SDK, through /converse route
   */
  $response = $request->converse->textConverse($text, $senderId);

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
    $message->addReply(['type' => 'text', 'content' => $reply]);
  }

  $message->reply();
}
