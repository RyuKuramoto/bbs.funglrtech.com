# develop by Laravel framework

## Environment settings

### re-install php 7.3

use TeraTerm.

```shell
$ sudo su -
# systemctl stop httpd
# cd /usr/local/src/php/php-7.3.16
# ./configure \
    --prefix=/usr/local/php \
    --with-config-file-path=/usr/local/php/etc \
    --with-config-file-scan-dir=/etc/php.d \
    --enable-mbstring \
    --enable-bcmath \
    --enable-pcntl \
    --with-zlib-dir=/usr \
    --enable-ftp \
    --enable-exif \
    --enable-calendar \
    --enable-sysvmsg \
    --enable-sysvsem \
    --enable-sysvshm \
    --enable-wddx \
    --with-curl \
    --with-iconv \
    --with-gmp \
    --with-pspell \
    --with-gd \
    --with-jpeg-dir=/usr \
    --with-png-dir=/usr \
    --with-libzip \
    --with-xpm-dir=/usr \
    --with-freetype-dir=/usr \
    --enable-gd-jis-conv \
    --with-openssl \
    --with-gettext=/usr \
    --with-zlib=/usr \
    --with-bz2=/usr \
    --with-recode=/usr \
    --with-mysqli=mysqlnd \
    --enable-mysqlnd \
    --with-pdo-mysql=mysqlnd \
    --with-readline \
    --with-apxs2=/usr/local/apache2/bin/apxs \
    --enable-zip \
    --without-libzip
# make
# make install
# libtool --finish /usr/local/src/php/php-7.3.16/libs
```

### install composer

use TeraTerm.

```shell
$ cd /home/vagrant
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ sudo mv ./composer.phar /usr/local/bin/composer
```

### install hirak/prestissimo

use TeraTerm.

```shell
$ composer config -g repos.packagist composer https://packagist.jp
$ composer global require hirak/prestissimo
```

### install laravel/installer

use TeraTerm.

```shell
$ composer global require laravel/installer
```

PATH Setting to .bash_profile

```shell
$ vim /home/vagrant/.bash_profile
```

Add path global required composer package.

```bash
export PATH = $PATH:~/.config/composer/vendor/bin
```

After written, Save and close vim.

Reload .bash_profile

```shell
$ source /home/vagrant/.bash_profile
```

## Laravel settings

### install composer packages of bbs project.

use TeraTerm.

```shell
$ cd /var/www/bbs.funglrtech.com
$ composer install
```

### create .env file

use TeraTerm.

```shell
$ cd /var/www/bbs.funglrtech.com
$ cp ./.env.example ./.env
$ php artisan key:generate
```

### edit .env file

use git bash.

```bash
$ cd /c/workspace/bbs
$ code .
```

Edit .env file by Visual Studio Code

* APP_NAME ... bbs
* APP_URL ... http://bbs.funglrtech.com
* DB Settings
    * DB_DATABASE ... your database name
    * DB_USERNAME ... your database username
    * DB_PASSWORD ... password of your database user
