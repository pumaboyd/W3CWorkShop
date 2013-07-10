<?php
#phpinfo();
define('BR', '<br/>');

echo __FILE__;
echo BR;

echo dirname(__FILE__).'';
echo BR;

$basedir = dirname(dirname(__FILE__));     
echo $basedir;
echo BR;



if (defined('PROJECT_NAME')) {
	echo '存在';
	echo BR;
} else {
	echo "不存在";
	echo BR;
}

$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);

?>
