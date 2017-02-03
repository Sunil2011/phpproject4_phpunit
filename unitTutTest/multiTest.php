<?php
//require 'vendor/autoload.php'; 
# do not require above one because we are autoloading using composer and 
# also created phpunit.xml file 

class multitest extends PHPUnit_Framework_TestCase{
    public function testMultiplicationNum(){
        $mul = new multi ;
        $this->assertEquals(5, $mul->mult(2, 2) );
    }
}
