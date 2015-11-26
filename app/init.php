<?php

// blogger/app/init.php

require 'config.php';
set_include_path(
        LIB_PATH
      );

function classLoader($classname) {
   require str_replace('\\', DS, $classname) . '.php';
  
    //echo $classname;
}
spl_autoload_register('classLoader');

$db = new Aston\Db\Connection(
        DB_DRIVER,
        DB_HOST,
        DB_NAME, 
        DB_USERNAME,
        DB_PASSWORD);

$db->setPort(DB_PORT);
$db->connect();


