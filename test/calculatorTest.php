<?php
/* 
 * use complete location of phpunit in this case  
 * in this canse (in terminal) 
 * admin1@venu$ var/www/PhpProject4_phpunit/vendor/bin/phpunit (instead of phpunit)
 * because it is installed locally it will show the details of phpunit
 * for testing : give command like this in terminal..
 *  admin1@venu$ var/www/PhpProject4_phpunit/vendor/bin/phpunit var/www/PhpProject4_phpunit/test/calculatorTest.php
 * 
 */
 
#1) require '/var/www/PhpProject4_phpunit/lib/Calculator.php';
// add above or below line to get the Calculator class
require '/var/www/PhpProject4_phpunit/app/lib1/Calculator.php';

class calculatorTest extends PHPUnit_Framework_TestCase{
   
    public function testAddNumbers(){
     
        $calc = new Calculator;
      
        $this->assertEquals(4, $calc->add(2,2));
        //$this->assertEquals(5, $calc->add(2,2)); // this results to failure
        
    }
}
