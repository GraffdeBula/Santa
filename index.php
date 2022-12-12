<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/services/autoloader.php");
spl_autoload_register([new autoloader(), 'getClass']);