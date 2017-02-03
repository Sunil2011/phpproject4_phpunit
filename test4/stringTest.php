<?php

class stringTest extends PHPUnit_Framework_TestCase{
    
    public function testIsMyString(){
        $string = "Mostly Harmless";
        
        $this->assertInternalType("string", $string);
        $this->assertGreaterThan(0,strlen($string));
       // $this->assertContains("42",$string); 
        # if we write above one there then it will not execute assert after this because it is false
        
        $this->assertContains("Most",$string);
        $this->assertContains("Mou",$string);
        
    }
    
    public function testString(){
        $str = "sunil kumar";
        
        $this->assertContains("sun", $str);
        $this->assertGreaterThanOrEqual(10, strlen($str));
        
    }
    
     public function testFailure()
    {
        $this->assertContains(4, array(1, 2, 3));
    }
    
} 

