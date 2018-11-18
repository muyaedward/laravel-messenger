# Laravel Messenger
This package will allow you to add a full user messaging system into your Laravel application.

## Features
* Multiple conversations per user
* Optionally loop in additional users with each new message
* View the last message for each thread available
* Returns either all messages in the system, all messages associated to the user, or all message associated to the user with new/unread messages
* Return the users unread message count easily
* Very flexible usage so you can implement your own access control

## Common uses
* Open threads (everyone can see everything)
* Group messaging (only participants can see their threads)
* One to one messaging (private or direct thread)

## Installation (Laravel 5.x)
```
composer require muyaedward/messenger
```

Or place manually in composer.json:

```
"require": {
    "muyaedward/messenger": "dev-master"
}
```

Run:

```
composer update
```

Add the service provider to `config/app.php` under `providers`:

```php
'providers' => [
    Muyaedward\Messenger\MessengerServiceProvider::class,
],
```

> **Note**: If you are using Laravel 5.5, this step is unnecessary. Laravel Messenger supports [Package Discovery](https://laravel.com/docs/5.5/packages#package-discovery).

Publish config:

```
php artisan vendor:publish --provider="Muyaedward\Messenger\MessengerServiceProvider" --tag="config"
```
	
Update config file to reference your User Model:

```
config/messenger.php
```

Create a `users` table if you do not have one already. If you need one, the default Laravel migration will be satisfactory.

**(Optional)** Define names of database tables in package config file if you don't want to use default ones:

```php
'messages_table' => 'messenger_messages',
'participants_table' => 'messenger_participants',
'threads_table' => 'messenger_threads',
```
    
Publish migrations:

```
php artisan vendor:publish --provider="Muyaedward\Messenger\MessengerServiceProvider" --tag="migrations"
```

Migrate your database:

```
php artisan migrate
```

Add the trait to your user model:

```php
use Muyaedward\Messenger\Traits\Messagable;

class User extends Authenticatable {
    use Messagable;
}
```

## Contributing? 
Please format your code before creating a pull-request. This will format all files as specified in `.php_cs`:

```
vendor/bin/php-cs-fixer fix .
```
## Credits

- [Chris Gmyr](https://github.com/cmgmyr)
- [Anton Komarev](https://github.com/antonkomarev)
- [All Contributors](../../contributors)

### Special Thanks
This package used [cmgmyr/laravel-messenger](https://github.com/cmgmyr/laravel-messenger) as a starting point.
