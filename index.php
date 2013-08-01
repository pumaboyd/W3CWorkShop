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


class sample implements Iterator
{
    private $_items = array(1,2,3,4,5,6,7);
 
    public function __construct() {
                  ;//void
    }
    public function rewind() { reset($this->_items); }
    public function current() { return current($this->_items); }
    public function key() { return key($this->_items); }
    public function next() { return next($this->_items); }
    public function valid() { return ( $this->current() !== false ); }
}
 
$sa = new sample();
foreach($sa as $key => $val){
    print $key . "=>" .$val;
}

echo BR;
echo DIRECTORY_SEPARATOR;

$myname ='wanjun';
echo "my name is $myname";

$sss=array("11","222","333");
var_dump($sss);

?>
