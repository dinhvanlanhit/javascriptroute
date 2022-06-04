<?php

use Illuminate\Support\Facades\Route;

Route::get("javascript-route.min.js",function(){
    $routes = collect(Route::getRoutes())->map(function ($route) {
        $parameterNames =[];
        if($route!=null&&$route->getName()!=""){
            $url = str_replace("?","",$route->uri());
            foreach($route->parameterNames() as $parameter){
                $parameterNames[]="{".$parameter."}";
            }
            if($route->uri()=='/'||$route->uri()=='//'){
                return (object)[
                    "name"=>$route->getName(),
                    "url"=>url('/').$url,
                    "parameters"=>$parameterNames
                ];
            }else{
                return (object)[
                    "name"=>$route->getName(),
                    "url"=>url('/').'/'.$url,
                    "parameters"=>$parameterNames
                ];
            }
        }
    });
    header('Content-Type: text/javascript');
    echo("// Email : dinhvanlanhit.it@gmail.com \n");
    echo("// Website : dinhvanlanh.com \n");
    echo("// Github : https://github.com/dinhvanlanhit/javascriptroute \n");
    echo("var javascriptroutes = ").json_encode($routes).";\n";
    echo(file_get_contents((__DIR__."/script/index.js")));
})->name("javascript-route.min.js");
