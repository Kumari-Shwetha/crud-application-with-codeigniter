# crud-application-with-codeigniter

- create the database and import the sql file

-  open application->config -> database.php
update all your database server credentials
host,username,password and database

- change the base_url of your application
application -> config ->config.php
$_config['base_url']='';

-  create .htaccess file in root directory
write the following rules

      RewriteEngine on

      RewriteCond %{REQUEST_FILENAME} !-f

      RewriteCond %{REQUEST_FILENAME} !-d

      RewriteRule ^(.*)$ /crud-application-with-codeigniter/index.php/$1 [L]


[View Project](https://kumarishwetha.com/codeigniter-crud/posts)


### Skills used: HTML,CSS,PHP,MySQL,Codeigniter
