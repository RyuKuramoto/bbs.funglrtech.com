# How to use Laravel UI (Vue.js)

## Settings

### install Node.js by yum.

use Teraterm.

```shell
$ sudo su -
# curl -sL https://rpm.nodesource.com/setup_14.x | bash -
# yum install -y nodejs
# npm update -g
# exit
```

### Prepare node_modules directory.

use Teraterm.

```shell
$ mkdir -p /home/vagrant/bbs.funglrtech.com/node_modules
$ mkdir -p /var/www/bbs.funglrtech.com/node_modules
$ sudo mount -B /home/vagrant/bbs.funglrtech.com/node_modules /var/www/bbs.funglrtech.com/node_modules
```

### Add Provisioning to Vagrantfile.

```ruby
# Provisioning
config.vm.provision "shell",
    run: "always",
    inline: "sudo mount -B /home/vagrant/bbs.funglrtech.com/node_modules /var/www/bbs.funglrtech.com/node_modules"
```

### Add Laravel UI to your project.

use Teraterm.

```shell
$ cd /var/www/bbs.funglrtech.com
$ composer require laravel/ui
$ php artisan ui vue
$ npm install
```

## Development

### Create sample blade file

`/var/www/bbs.funglrtech.com/resources/views/sample.blade.php`

```php
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Vue sample</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
        </div>
        <script src=" {{ mix('js/app.js') }} "></script>
    </body>
</html>

```

### Add routing

Routing definitions file is `/var/www/bbs.funglrtech.com/routes/web.php`

```php
<?php
use Illuminate\Support\Facades\Route;

Route::get('sample', function () {
    return view('sample');
});
```

### Build Vue.js component

If you modify component of Vue.js, you need run build command.

use Teraterm.

```
$ cd /var/www/bbs.funglrtech.com
$ npm run dev
```

After done, access [sample page](http://bbs.funglrtech.com/sample) by web browser.
