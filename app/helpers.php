<?php
use Illuminate\Support\Facades\Route;

if(! function_exists('page_title')){
   
    function page_title($title){
        $base_title='Laracarte -List of Artisans';
        if($title===''){
            return $base_title;

        }else {
            return $title .'|'.$base_title; 
        }
    }
}

if(! function_exists('set_Active_route')){
    function set_Active_route($route){
        return Route:: is($route) ? 'active':'' ;
    }

}


?>