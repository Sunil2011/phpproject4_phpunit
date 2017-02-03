<?php

require'RemoteConnect.php';

class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
 // public function setUp(){ }
  //public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
  
  function testIsRightObject() {
  $connObj = new RemoteConnect();
  $returnedObject = $connObj->returnSampleObject();
  $this->assertInstanceOf('RemoteConnect', $returnedObject);
}
}

