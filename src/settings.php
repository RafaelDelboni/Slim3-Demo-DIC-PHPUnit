<?php
// Settings with Zend-Config
$files = glob('../config/{global,local}*.php', GLOB_BRACE);
return Zend\Config\Factory::fromFiles($files);


