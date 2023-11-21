## set up
```
docker build -t php-fpm-82 .
docker run -it --rm -v "$PWD":/var/www php-fpm-82 bash
composer install 
```

execute unit test
```
./vendor/bin/phpunit tests/
```