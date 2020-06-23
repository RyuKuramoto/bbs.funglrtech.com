# BBS

## Repository

### clone remote repository

use git bash.

```bash
$ cd /c/workspace
$ git clone https://gitlab.com/for-newcommer/bbs.git
```

### create feature branch

use git bash.

for developer who want to develop plain PHP.

```bash
$ cd /c/workspace/bbs
$ git branch feature/xxxxxx
$ git checkout feature/xxxxxx
```

If you want to develop by Laravel framework.

```bash
$ cd /c/workspace/bbs
$ git checkout feature/template-laravel
$ git checkout -b feature/xxxxxx
```

## Environment Settings

### Vagrant

Edit your `Vagrantfile` by Visual Studio Code.

Add synced_folder setting.

```ruby
config.vm.synced_folder "C:/workspace/bbs", "/var/www/bbs.funglrtech.com"
```

After, you need restart virtual machine.

```bash
$ vagrant reload
```

### VirtualHost(Apache)

use TeraTerm.(Connect to Virtual Machine by ssh.)

Add VirtualHost setting.

```shell
$ sudo su -
# systemctl stop httpd
# mkdir /usr/local/apache2/conf/conf.d
# vim /usr/local/apache2/conf/conf.d/bbs.funglrtech.com.conf
```

Content of `/usr/local/apache2/conf/conf.d/bbs.funglrtech.com.conf`.

```
<VirtualHost *:80>
  ServerName bbs.funglrtech.com
  DocumentRoot "/var/www/bbs.funglrtech.com/public"
  <Directory "/var/www/bbs.funglrtech.com/public">
    Options FollowSymLinks
    AllowOverride All
    DirectoryIndex index.php index.html
    Require all granted
  </Directory>
</VirtualHost>
```

After written, Save and close vim.

Next, add VirtualHost setting of training.funglrtech.com.

```shell
# vim /usr/local/apache2/conf/conf.d/training.funglrtech.com.conf
```

Content of `/usr/local/apache2/conf/conf.d/training.funglrtech.com.conf`.

```
<VirtualHost *:80>
  ServerName training.funglrtech.com
  DocumentRoot "/var/www/training.funglrtech.com"
  <Directory "/var/www/training.funglrtech.com">
    Options FollowSymLinks
    AllowOverride All
    DirectoryIndex index.php index.html
    Require all granted
  </Directory>
</VirtualHost>
```

Edit `httpd.conf`.

```shell
# vim /usr/local/apache2/conf/httpd.conf
```

Enable mod_rewrite.(Line 186, remove 「`#`」)

```
LoadModule rewrite_module modules/mod_rewrite.so
```

Add including other configuration file setting to end of file.

```
Include conf/conf.d/*.conf
```

After written, Save and close vim.

### Add definition to hosts(Windows)

Note: Administrator authorization is required.

Add bbs.funglrtech.com to hosts file(`C:\windows\system32\drivers\etc\hosts`).

```
192.168.33.10    bbs.funglrtech.com
```
