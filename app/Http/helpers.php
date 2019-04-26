<?php

use Illuminate\Http\Request;

if(!function_exists("getRoutePrefix")){
    function getRoutePrefix(){
        return substr(app()->make(Request::class)->route()->getPrefix(),1);
    }
}

if(!function_exists("getModelByUrl")){
    function getModelByUrl(){
        return "App\\".ucfirst(str_replace("-","_",substr(app()->make(Request::class)->segment(2),0,-1)));
    }
}