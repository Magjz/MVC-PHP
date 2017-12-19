<?php

function loadClass($class){
    $class = str_replace("\\", "/", $class);
    require_once($class).".php";

}

spl_autoload_register("loadClass");


