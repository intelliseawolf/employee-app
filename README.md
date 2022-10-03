# Employee App

## Config project

- Edit `employee/config.php` with your database details

```php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "database";
```

- Place `web/` folder in your _apache_ server

- Init database with `init/tables.sql`

```ssh
$ mysql -h hostname -u username -ppassword
mysql> use database;
mysql> source tables.sql;
```

## Run project

- Insert data in database (`init/insert_data.sql`)

```ssh
$ mysql -h hostname -u username -ppassword
mysql> use database;
mysql> source insert_data.sql;
```
