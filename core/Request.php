<?php
namespace app\core;
class Request
{

    
    
    public function getPath()
    {
     $path = $SERVER['REQUEST_URI'] ?? '/';   
     $position = strpos($path,'?');
     echo "<pre>".$position."</pre>";
    }

    public function getMethod(){

    }
    
}

?>