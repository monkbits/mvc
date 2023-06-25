<?php 
/**
 * User : Ankur goyal
 */

/**
 * class Router 
 * 
 * @author ankur goyal 
 * @package app\core;
 *  
 */
namespace app\core;

 class Router {
    public Request $request;
    protected array $routes = [] ;
    public function __construct(Request $request){
       $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath(); 
    }
 }


?>