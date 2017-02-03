<?php

require 'mixt2.php';
require 'addi2.php';



class mixtTest2 extends PHPUnit_Framework_TestCase{
      
    public function testmixt(){
        
        $stub = $this->getMockBuilder('addi2')
                    ->getMock();
       
        
        // Configure the stub.
        
         $stub->expects($this->any())
             ->method('add')
             ->will($this->returnValue(8) );
        
        
        $m = new mixt2($stub->add() );
        $this->assertEquals(16, $m->mix(5, 3));
        echo 'result = '.$m->mix(5, 3);
    }
}
