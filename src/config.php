<?php

return [
  'recast' => [
    'token' => $_ENV && $_ENV['token'] ? $_ENV['token'] : '',
    'language' => $_ENV && $_ENV['language'] ? $_ENV['language'] : '',
  ],
];
