<?php


declare(strict_types=1);


namespace Framework;

class App
{


    private Router $router;  //property

    public function __construct(){
        $this->router = new Router();  //instance
    }

    public function get(string $path){
        $this->router->add('GET',$path);
    }

    
    public function run()
    {
        echo "Welcome tom My Application";
    }
}