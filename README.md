# PMLineAPI

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/bbo51dog/PMLineAPI/blob/master/LICENSE)

### Languages

[English](#English)
[日本語](#日本語)

-------

## English

### Overview

This is an API plugin which sends messages from PocketMine-MP to LINE using MessagingAPI.

### Download

[MCBE Japan Forum](https://forum.mcbe.jp/resources/471/)
[GitHub](https://github.com/bbo51dog/PMLineAPI/releases)

### Example of usage

In the case of sending text message

##### Importing classes

```php
use bbo51dog\pmline\PMLineAPI;
use bbo51dog\pmline\TextMessage;
```

##### Creating Bot instance

You replace 'AccessToken' with your token.
Please view [developers.line.biz](https://developers.line.biz/en/docs/messaging-api/building-bot/#setting-up-your-bot-on-the-console) for how to generate a token.

```php
$bot = PMLineAPI::createBot('AccessToken');
```

[Bot.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/bot/Bot.php)

##### Creating MessageList instance

```php
$list = PMLineAPI::createMessageList();
```
[MessageList.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/MessageList.php)

##### Creating text message

The following code create TextMessage instance and set text to the instance.

```php
$text = new TextMessage();
$text->setText('Your Message');
```

[TextMessage.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/TextMessage.php)

##### Registering message

You can register 5 Messages or less.

```php
$list->add($text);
```

In addition, you can register classes which implement [Message interface](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/Message.php).
You can find the classes in [message directory](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message).

##### Sending message

```php
$bot->sendBroadcast($list);
```

There are a total of four functions for sending messages, but sendPush() and sendMulticast() cannot be used in the free plan or basic plan. Also, sendNarrowcast() is not implemented yet.

### Contact

[Twitter](https://twitter.com/bbo51dog)
[GitHub](https://github.com/bbo51dog)

-------

## 日本語

### 概要

このプラグインは、MessagingAPIを利用してPocketMine-MPからLINEへメッセージを送るAPIプラグインです。

### ダウンロード

[MCBE Japan Forum](https://forum.mcbe.jp/resources/471/)
[GitHub](https://github.com/bbo51dog/PMLineAPI/releases)

### 使い方の例

テキストメッセージを送る場合

##### use文

```php
use bbo51dog\pmline\PMLineAPI;
use bbo51dog\pmline\TextMessage;
```

##### Botインスタンス作成

AccessTokenは自分のトークンに置き換えます。トークンを作成する方法は[developers.line.biz](https://developers.line.biz/ja/docs/messaging-api/building-bot/#%E3%83%81%E3%83%A3%E3%83%8D%E3%83%AB%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E7%99%BA%E8%A1%8C%E3%81%99%E3%82%8B)を参照してください。

```php
$bot = PMLineAPI::createBot('AccessToken');
```

[Bot.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/bot/Bot.php)

##### MessageListインスタンス作成

```php
$list = PMLineAPI::createMessageList();
```

[MessageList.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/MessageList.php)

##### テキストメッセージ作成

TextMessageインスタンスを作成し、テキストを設定します。

```php
$text = new TextMessage();
$text->setText('Your Message');
```
[TextMessage.php](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/TextMessage.php)

##### メッセージ登録

メッセージは5つまで登録することができます。

```php
$list->add($text);
```

TextMessageの他にも、[Messageインターフェース](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message/Message.php)を実装したクラスをMessageListに登録する事ができます。
登録可能なクラスは[messageディレクトリ](https://github.com/bbo51dog/PMLineAPI/blob/master/src/bbo51dog/pmline/message)内を参照してください。

##### メッセージ送信

```php
$bot->sendBroadcast($list);
```

メッセージを送信する関数は全部で4つありますが、sendPush()とsendMulticast()はフリープラン、ベーシックプランでは使用できません。また、sendNarrowcast()はまだ実装していません。

### 連絡先

[Twitter](https://twitter.com/bbo51dog)
[GitHub](https://github.com/bbo51dog)
