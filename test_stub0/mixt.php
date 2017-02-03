<?php

require 'addi.php';

class mixt{
    public function mix($x,$y){
        $obj = new addi();
        $a = $obj->add($x,$y);
        $b = $x - $y ;
        
        return $a*$b ;
    }
    
}
