<?php
namespace App\Models;

class Config{

    protected static $setting = array();

    public static function get($key){
        return isset(self::$setting[$key]) ? self::$setting[$key] : null;
    }

    public static function set($key, $value){
        self::$setting[$key] = $value;
    }
}

Config::set("site_name", "Rush MVC");
Config::set("default_controller", "page"); 
Config::set("default_action", "index"); 
Config::set('ERROR_LOG_FILE', "errors.log");
Config::set('HOST', "localhost"); 
Config::set('USERNAME', ""); 
Config::set('PASSWORD', ""); 
Config::set('PORT', 3306); 
Config::set('DB', "rush_mvc");
