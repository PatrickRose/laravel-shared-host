laravel-shared-host
===================

An easy way for you to use Laravel 4 on shared hosting, without command line access

Installation
------------

Like all good things, this package is installed using Composer. Just add the
following to your composer.json

```json
"require": {
    "patrick-rose/laravel-shared-host": "dev-master"
}
```

Then just run `composer update` and Composer will do the heavy lifting.

Then you just need to tell Laravel to load the files. Go into `app/config/app.php`
and add this to your provider's array:

```php
providers => array(
    'PatrickRose\LaravelSharedHost\LaravelSharedHostServiceProvider',
);
```

Usage
-----

When you get around to deploying your application, upload **everything** (including
your vendor folder). Now, go into
`/vendor/patrick-rose/laravel-shared-host/src/config/config.php`, and set activated
to true. You'll now have a few routes to go to, but the important one is:

```
http://[yoursite]/patrickrose-sharedhost-index
```

You'll be asked for a password, which is your application key by default. Then you
can run the commands that you need to run.

Note that currently, if something goes wrong an error message is thrown. 
