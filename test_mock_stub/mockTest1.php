<?php

//Testing that a method gets called once and with a specified argument
#Because we are interested in verifying that a method is called, 
#and which arguments it is called with, we introduce the expects() and 
#with() methods to specify how this interaction should look.

require 'SubObjClass.php';

class SubjectTest extends PHPUnit_Framework_TestCase
{
    public function testObserversAreUpdated()
    {
        // Create a mock for the Observer class,
        // only mock the update() method.
        $observer = $this->getMockBuilder('Observer')
                         ->setMethods(array('update'))
                         ->getMock();

        // Set up the expectation for the update() method
        // to be called only once and with the string 'something'
        // as its parameter.
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('something'));

        // Create a Subject object and attach the mocked
        // Observer object to it.
        $subject = new Subject('My subject');
        $subject->attach($observer);

        // Call the doSomething() method on the $subject object
        // which we expect to call the mocked Observer object's
        // update() method with the string 'something'.
        $subject->doSomething();
    }
}