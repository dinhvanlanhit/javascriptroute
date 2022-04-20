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
    echo("var javascriptroutes = ").json_encode($routes).";\n";
    echo('var _0x1aea=["","\x5B\x5D","\x5B","\x5D","\x63\x6F\x6E\x73\x74\x72\x75\x63\x74\x6F\x72","\x6F\x62\x6A\x65\x63\x74","\x3D","\x6D\x61\x70","\x6B\x65\x79\x73","\x26","\x6A\x6F\x69\x6E","\x73\x74\x72\x69\x6E\x67","\x6C\x65\x6E\x67\x74\x68","\x3F","\x69\x73\x41\x72\x72\x61\x79","\x6E\x61\x6D\x65","\x66\x69\x6E\x64","\x70\x61\x72\x61\x6D\x65\x74\x65\x72\x73","\x75\x72\x6C","\x72\x65\x70\x6C\x61\x63\x65","\x66\x6F\x72\x45\x61\x63\x68"];function toQueryString(_0x883fx2= {},_0x883fx3){let _0x883fx4=Object[_0x1aea[8]](_0x883fx2)[_0x1aea[7]]((_0x883fx5)=>{let _0x883fx6=_0x883fx5;let _0x883fx7=_0x883fx2[_0x883fx6];if(!_0x883fx7&& (_0x883fx7=== null|| _0x883fx7=== undefined|| isNaN(_0x883fx7))){_0x883fx7= _0x1aea[0]};switch(_0x883fx2[_0x1aea[4]]){case Array:_0x883fx6= `${_0x1aea[0]}${_0x883fx3}${_0x1aea[1]}`;break;case Object:_0x883fx6= (_0x883fx3?`${_0x1aea[0]}${_0x883fx3}${_0x1aea[2]}${_0x883fx6}${_0x1aea[3]}`:_0x883fx6);break};if( typeof _0x883fx7=== _0x1aea[5]){return toQueryString(_0x883fx7,_0x883fx6)};return `${_0x1aea[0]}${_0x883fx6}${_0x1aea[6]}${encodeURIComponent(_0x883fx7)}${_0x1aea[0]}`});return _0x883fx4[_0x1aea[10]](_0x1aea[9])}function route(_0x883fx9,_0x883fxa,_0x883fxb){var _0x883fxc=_0x1aea[0];if( typeof (_0x883fxa)=== _0x1aea[11]&& _0x883fxa== _0x1aea[0]){_0x883fxa= []}else {if( typeof (_0x883fxa)=== _0x1aea[11]&& _0x883fxa!== _0x1aea[0]){_0x883fxa= [_0x883fxa]}else {if( typeof (_0x883fxa)=== _0x1aea[5]&& Object[_0x1aea[8]](_0x883fxa)[_0x1aea[12]]> 0){_0x883fxc= _0x1aea[13]+ toQueryString(_0x883fxa)}else {_0x883fxa= [_0x883fxa]}}};if( typeof (_0x883fxb)=== _0x1aea[5]&& Object[_0x1aea[8]](_0x883fxb)[_0x1aea[12]]> 0){_0x883fxc= _0x1aea[13]+ toQueryString(_0x883fxb)};if(javascriptroutes!== undefined&& Array[_0x1aea[14]](javascriptroutes)){if(_0x883fx9!== _0x1aea[0]&& _0x883fx9!== null){let route=javascriptroutes[_0x1aea[16]]((_0x883fxd)=>{return _0x883fxd!= undefined&& _0x883fxd!= null&& _0x883fxd[_0x1aea[15]]=== _0x883fx9});if(route){var _0x883fxe=route[_0x1aea[17]];var _0x883fxf=route[_0x1aea[18]];if(Array[_0x1aea[14]](_0x883fxa)&& Array[_0x1aea[14]](_0x883fxe)){_0x883fxa[_0x1aea[20]](function(_0x883fx10,_0x883fx11){if(_0x883fxe[_0x883fx11]!== undefined){let _0x883fx12=_0x883fxe[_0x883fx11];if(_0x883fx12!== _0x1aea[0]&& _0x883fx10!== _0x1aea[0]){_0x883fxf= _0x883fxf[_0x1aea[19]](_0x883fx12,_0x883fx10)}}});return _0x883fxf+ _0x883fxc};return _0x883fxf+ _0x883fxc}}};return null}');
})->name("javascript-route.min.js");
