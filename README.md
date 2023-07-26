# Instructions to run the application locally

To run the application You should have php and composer installed.
I am using php version 8.1.

To build the project.

```bash
composer install
```

I also included a `docker-compose.yaml` file to run the mysql and phpmyadmin.

to run the docker compose

```bash
docker-compose up

```

this will start the mysql database and if you go to localhost:8080. you can access the phpmyadmin.

Finally to run the application:

```bash
php artisan serve
```

Also I have included the Postman folder that I have used to test the APIs.
It is located in the projects file. `Laravel Subscription.postman_collection.json`.
Simply import the file on postman and you will be good to go.
