# Demo

## Installation

```
git submodule update --init
```

```
cp .env.example .env
```

```
cd laradock
```

```
cp env-example .env
```

```
docker-compose up -d nginx mysql phpmyadmin redis php-worker workspace
```

#### Enter the workspace container:

```
docker-compose exec --user=laradock workspace bash
```

#### Execute commands:

```
composer install
```

```
php artisan key:generate
```

```
php artisan migrate --force
```

```
php artisan db:seed --force
```

```
npm install
```

```
npm run development -- --watch
```

```
npm run production
```

#### Open a browser and visit the localhost address:

```
http://localhost
```

```
http://localhost/admin
```

## Cheat Sheet

### Pushing to a remote

```
git push -u origin main
```

### Updating submodules

```
git submodule foreach git pull origin master
```

### Entering to the MySQL command line

```
docker-compose exec mysql mysql -udefault -psecret
```

## Testing

```
phpunit
```

## Style Guide

See [Laravel best practices](https://github.com/alexeymezenin/laravel-best-practices)

## Credits

- [Marcin Lewandowski](https://github.com/martio)
