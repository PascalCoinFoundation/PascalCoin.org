# PascalCoin.org

Website for PascalCoin.org.

# Installation

You need PHP >= 7.1 and a running mysql server.

```
# clone repo
git clone $repo-url folder

cd folder

# install php dependencies
composer install

# copy .env.example
cp .env.example .env

```

Edit the following values in the `.env` file:

`DB_*` - connection to the database, should be self explanatory.

`APP_DEBUG` - true for dev, false for production

`MAILCHIMP_*` - MailChimp settings

`MAIL_FROM_*` - Sender data for emails.

`MAIL_*` - Email settings.


Now generate an encryption key for sessions.

```
php artisan key:generate
```

Migrate the database:

```
php artisan migrate
```

Fetch CMC data once so we have "something":

```
php artisan pascal:dumpcmc
```

Setup a cron. This will periodically pull coinmarketcap data, maybe other stuff later on.
Scheduling is done within the application.

```
* * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1
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
# fetch cmc data once
php artisan pascal:cmc
php artisan pascal:pip

# use local php webserver for simplicity
php artisan serve

# open browser (depends on your system)
xdg-open http://127.0.0.1:8000
```