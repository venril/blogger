<?php
// blogger/public/index.php
require '../app/init.php';
use \Aston\Test\Demo;
use \Zend\Test\Test;

$d = new Demo() ;

$z = new Test();


$tmpl = new Aston\View\Template('home.phtml');
$tmpl->render();

ob_start();

echo 'test';

$content = ob_get_clean();