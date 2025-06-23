<?php

class Root{

    public static function connect($url){
        $url=htmlspecialchars(trim($url));
        $url=trim($url,"/");
        $url=explode("/",$url);
        $class=$url[0];
        $getParams=$_GET;

        if(count($url)>=2){
            $method=$url[1];
            if(count($url)===2){
                echo "2";
            }else{
                echo "numerous";
            }
        }else{
            if(file_exists("Controller/$class.php")){
                
                $reflect=new ReflectionMethod($class,"index");
                $reflect->invokeArgs(new $class,[$getParams]);
            }else{
                echo "<h1 style='text-align:center;color:red;margin-top:auto'>ERROR 404, NOT FOUND</h1>";
            }
        }
    }
}