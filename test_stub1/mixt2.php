<?php

class mixt2{
    
    protected $name; 
    public function __construct($name) // for addi2 
    {
        $this->name = $name  ;
    }

    public function mix($x,$y){
       //// $obj = new addi();
       // $a = $obj->add($x,$y);
       // $a= $this->name->add(); // if we pass object
        $a = $this->name;   // bcz we are passing value
        $b = $x - $y ;
        
        return $a*$b ;
    }
    
}