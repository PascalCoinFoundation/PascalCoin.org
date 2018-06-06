# PascalCoin.org

Website for PascalCoin.org.

# Installation

You need PHP >= 7.1 and a running mysql server.

```
# clone repo
git clone $repo-url

# install php dependencies
composer install

# copy .env.example
cp .env.example .env

# create encryption key
php artisan generate:key
```

Edit the following values in the .env file:

`DB_*` - connection to the database, should be self explanatory.

`APP_DEBUG` - true for dev, false for production

`MAILCHIMP_*` - MailChimp settings

`MAIL_FROM_*` - Sender data for emails.

`MAIL_*` - Email settings.

Migrate the database:

```
php artisan migrate
```

## Webserver

Webserver configuration can be found here: 

https://laravel.com/docs/5.6#web-server-configuration

## Development

Run the following commands:

```
# install javascript dependencies
npm install

# build js on the fly on changes
npm run watch
```

Change .env settings:

`MAIL_DRIVER=log`
`APP_DEBUG=true`

```
# use local php webserver for simplicity
php artisan serve

# open browser (depends on your system)
xdg-open http://127.0.0.1:8000
```