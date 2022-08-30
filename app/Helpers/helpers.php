<?php

// get youtube id
if(!function_exists('getYoutubeID')){
    function getYoutubeID($url){
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        $youtube_id = $match[1];
        return $youtube_id;
    }
}

if(!function_exists('getPathImage')){
    function getPathImage($path){
        if(preg_match('#http|https#', $path)){
            return $path;
        } else {
            return asset($path);
        }
    }
}