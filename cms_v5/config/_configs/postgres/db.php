<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

use craft\config\DbConfig;
use craft\helpers\App;

return DbConfig::create()
    ->dsn(App::env('DB_DSN') ?: null)
    ->driver('pgsql')
    ->server('postgres')
    ->port(5432)
    ->database(App::env('DB_DATABASE'))
    ->user(App::env('DB_USER'))
    ->password(App::env('DB_PASSWORD'))
    ->schema(App::env('DB_SCHEMA'))
    ->tablePrefix(App::env('DB_TABLE_PREFIX'))
    ->charset(App::env('DB_CHARSET'))
    ->collation(App::env('DB_COLLATION'))
    ;
