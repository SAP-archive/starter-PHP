# Recast.AI starter kit PHP

A starter kit for developing bots on the [Recast.AI](https://recast.ai) platform.

> **Note:** This project is currently in beta version and can be modified at any time.

## Requirements

#### PHP

We recommend to use at least `PHP v7.0`


#### Recast.AI account

Create an account on the [Recast.AI](https://recast.ai) platform and follow this [quick tutorial](https://recast.ai/gettingstarted) to create your first bot on the interface.

## Usage


#### Installation

`git clone git@github.com:RecastAI/starter-PHP.git my-bot && cd my-bot`

Using [Composer](https://getcomposer.org/download/):
`composer install`

#### Create the config file

 Create a `config.php` file in the `src` directory of your project, copy/paste these lines:

```php
<?php

$_ENV["REQUEST_TOKEN"] = "";
$_ENV["LANGUAGE"] = "";

// Write your own configuration here:
// ...
```

Complete the Recast.AI `$_ENV["REQUEST_TOKEN"]` and `$_ENV["LANGUAGE"]`: go to your bot page, click on the settings icon (on the right side of your screen), and copy the `request_token`.
Then, set the default language of your bot: `'en'`, `'fr'`... or leave this field empty for auto-detection language

Tips: This config. file will never be pushed onto your repository.


#### Run locally

Run the following command: `php -S localhost:5000`

> **Note:** Next steps, only if you have connected your bot to channels, using the Bot Connector tool

- download [ngrok](https://ngrok.com/)
- launch it: `./ngrok http 5000`
- copy the url ngrok gave and paste it in the [Recast.AI](https://recast.ai) interface: Go to your bot page, click on the **RUN** tab and edit your `current bot webhook`
- Chat with your bot on the channels you've configured ;)

#### Alternative, if you are not using **Bot Connector**

If you're not using the Bot Connector to connect your bot to the channels, you will only need to change the `bot.php` file and the `message.php` file and make changes depending on the way you want to receive the message.

## Documentation

Code | Documentation
------------ | -------------
Receiving messages | [The Recast.AI SDK](https://github.com/RecastAI/SDK-PHP/wiki) - connect
Sending messages | [The Recast.AI SDK](https://github.com/RecastAI/SDK-PHP/wiki) - connect
Rich messaging | See the different [payload message](https://man.recast.ai)
Manage the conversation | [The Recast.AI SDK](https://github.com/RecastAI/SDK-PHP/wiki) - converse

## More

You can view the whole API reference at [man.recast.ai](https://man.recast.ai).
You can follow us on Twitter at [@recastai](https://twitter.com/recastai) for updates and releases.

## License

Copyright (c) [2017] [Recast.AI](https://recast.ai)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
