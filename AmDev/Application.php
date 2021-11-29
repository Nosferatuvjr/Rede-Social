<?php
namespace AmDev;

class Application
{
    private $controller;

    private function setApp(){
        $loadName = 'AmDev\Controllers\\';

        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $url = explode('/',$url);
        
        if($url[0] ==''){
            $loadName.='Home';
        }else{
            $loadName.=ucfirst(strtolower($url[0]));
        }

        $loadName.='Controller';

        $loadName = str_replace('\\', '/', $loadName);
       
        if(file_exists($loadName.'.php')) {
            $loadName = str_replace('/','\\',$loadName);
            $this->controller = new $loadName();
        }else{
            include('Views/pages/error404/index.html');
            die();
        }
    }

    public function run(){
        $this->setApp();
        $this->controller->index();
    }
}
?>