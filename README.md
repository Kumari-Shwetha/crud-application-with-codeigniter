# crud-application-with-codeigniter

1) create the database and import the sql file

2) open application->config -> database.php
update all your database server credentials
host,username,password and database

3) change the base_url of your application
application -> config ->config.php
$_config['base_url']='';

4) create .htaccess file in root directory
write the following rules

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-f

RewriteCond %{REQUEST_FILENAME} !-d

RewriteRule ^(.*)$ /"your-folder-name"/index.php/$1 [L]


