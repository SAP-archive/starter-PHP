<?php

return [
  'recast' => [
    'token' => $_ENV && $_ENV['RECAST_TOKEN'] ? $_ENV['RECAST_TOKEN'] : '',
    'language' => $_ENV && $_ENV['RECAST_LANGUAGE'] ? $_ENV['RECAST_LANGUAGE'] : '',
  ],
];
