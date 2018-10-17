<?php
date_default_timezone_set('UTC');  
// change the following paths if necessary


$yii=dirname(__FILE__).'/../yii-1.1.15/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$debug=dirname(__FILE__).'/protected/config/debug.php';

include ($debug);

require_once($yii);
$app = Yii::createWebApplication($config);

// Yii::import("application.vendors.*"); 
Yii::import("application.components.XZendAutoLoader", true); 
Yii::registerAutoloader(array('XZendAutoLoader', 'loadClass') , true);

$app->run(); 
