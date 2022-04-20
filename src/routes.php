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
            if($route->uri()=='/'){
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
    echo("var javascriptroutes = ").json_encode($routes).";\n";
    echo('var _0xdf1e=["","\x73\x74\x72\x69\x6E\x67","\x6C\x65\x6E\x67\x74\x68","\x6B\x65\x79\x73","\x6E\x61\x6D\x65","\x66\x69\x6E\x64","\x70\x61\x72\x61\x6D\x65\x74\x65\x72\x73","\x75\x72\x6C","\x72\x65\x70\x6C\x61\x63\x65","\x66\x6F\x72\x45\x61\x63\x68"];function route(_0x6a04x2,_0x6a04x3){if( typeof _0x6a04x3== _0xdf1e[0]|| _0x6a04x3== null){_0x6a04x3=  new Array()}else {if( typeof _0x6a04x3== _0xdf1e[1]&& _0x6a04x3!= _0xdf1e[0]){_0x6a04x3= [_0x6a04x3]}};if(_0x6a04x2!= _0xdf1e[0]&& _0x6a04x2!= null){let route=javascriptroutes[_0xdf1e[5]]((_0x6a04x4)=>{return _0x6a04x4!= null&& _0x6a04x4!= _0xdf1e[0]&& Object[_0xdf1e[3]](_0x6a04x4)[_0xdf1e[2]]> 0&& _0x6a04x4[_0xdf1e[4]]== _0x6a04x2});if(route!= null){var _0x6a04x5=route[_0xdf1e[6]];var _0x6a04x6=route[_0xdf1e[7]];if(_0x6a04x5[_0xdf1e[2]]> 0){_0x6a04x3[_0xdf1e[9]](function(_0x6a04x7,_0x6a04x8){if(_0x6a04x5[_0x6a04x8]!= undefined){let _0x6a04x9=_0x6a04x5[_0x6a04x8];if(_0x6a04x9!= _0xdf1e[0]&& _0x6a04x7!= _0xdf1e[0]){_0x6a04x6= _0x6a04x6[_0xdf1e[8]](_0x6a04x9,_0x6a04x7)}}})};return _0x6a04x6}};return null}');
})->name("javascript-route.min.js");