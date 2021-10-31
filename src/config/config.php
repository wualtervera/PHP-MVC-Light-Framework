<?php

namespace PHPMVC\Config;

//BASE PATH
define('BASE_PATH', 'http://localhost/php-mvc/');

//DB Postgress
define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'db_phpmvc');
define('DB_USER', 'postgres');
define('DB_PASSWORD', '123');
define('CHARSET', 'SET client_encoding TO "UTF8"');

//DB MySql
/* define('DB_HOST', 'localhost');
define('DB_NAME', 'db_sube');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('CHARSET', 'utf8mb4'); */


//VIEWS
define('PUBLIC_PATH', BASE_PATH.'src/public/');
define('PATH_CSS', PUBLIC_PATH . 'css/');
define('PATH_JS', PUBLIC_PATH . 'js/');
define('PATH_IMG', PUBLIC_PATH . 'img/');
define('PATH_INC', './app/views/inc/');


//TITLE LOGIN
define('TITLE_LOGIN', 'Inicie sessión en PHPMVC');
define('LOGO_LOGIN', BASE_PATH.'src/public/img/php-develoment.png');

//LOGO DASHBOARD
define('LOGO_DASHBOARD', BASE_PATH.'src/public/img/php-develoment.png');