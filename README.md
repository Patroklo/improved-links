# Laravel improved HTTP method links

Links that send HTTP methods when clicked. Useful when needing POST or DELETE links.

## Index

* [Install](#install)
* [Description](#description)
* [How to use it](#how-to-use-it)


## Install

Add this package with composer with the following command:

```bash
composer require patroklo/improved-links
```

After updating composer, add the service providers to the `providers` array in `config/app.php`.

```php
Patroklo\ImprovedLinks\Providers\ImprovedLinksProvider::class,
```

Go to your console and type the artisan vendor publish command.

```bash
php artisan vendor:publish
```

This will add the views and javascript needed for the correct operation of the package.

Finally, add in your layout a reference to the javascript library:

```html
    <script type="text/javascript" src="{{ asset('assets/js/improved-links.js') }}"></script>
```

Aaaaand it's done! 


## Description

Handles the action triggered by user.
This package lets the developer the creation of links that will use other HTTP methods than GET. Also it's possible to add manually data that will be sent through the link.
It's possible to send any of the valid HTTP methods through this link: POST, GET, PUT, PATCH, DELETE.


## How to use it

The link method it's an extension of the HTTP library based in the main link method.

```php
\Html::methodLink'('method' => 'POST', 'url', 'title' => null, 'attributes' => [], 'secure' => null, 'escape' => true);
```

To send the data it's only neccesary to add a `data` key into the `attributes` section.

```php
{{ Html::methodLink("PUT", 'site/foobar', 'Submit', ['data' => ['name1' => 'value1, 'name2' => 'value2']]) }}
```

Once clicked, the link will redirect to the defined url sending all the data via POST.
