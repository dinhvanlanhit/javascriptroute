<?php
if (!function_exists('javascriptroute')) {
    function javascriptroute()
    {
        return '<script src="'.route("javascript-route.min.js").'"></script>';
    }
}
