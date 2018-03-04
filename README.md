## Notify
Framework agnostic PHP library to simplify interact with common messaging platforms, but [Slack](https://slack.com) for now!

#### Install

```bash
composer require mvaliolahi/notify
```

#### Getting start

```php
$notify = new Notify(new SlackDriver([
    'web_hook' => 'your slack web-hook'
]));

$notify->send((new Slack)->text('Hello World!'));
```

#### Develop Guide
##### What is a bot? / How can i create a new one?

Bot is a definition for any class that implements `Mvaliolahi\Notify\Contracts\Bot`, bot can interact with user to collect all necessary information to pass into `$notify->send()` method.

when bots passed to `$notify->send()`, the notify object is able to send this information to any messaging platform, obviously using specified Driver.

##### What is driver? / How can i implement it for other platforms?

Driver is a class that implements `Mvaliolahi\Notify\Contracts\Driver`, the only responsibility of driver is fetching essential data from `$bot` object, and implement related logic to send through messaging-platform.

it is clear enough that`$notify->send()` is just a wrapper around driver `execute()` method.

##### Slack Bot

The code shows you everything :)

```php
(new Slack)
->text('Normal text')
->format()->pre('text') // like <pre> tag in html
->format()->bold('Bold text.')
->format()->italic('Italic text.')
->format()->blockQuotes('Italic text.')
->format()->strikeThrough('Italic text.')
->format()->code('<p> The only thing we need is just words.</p>')
```