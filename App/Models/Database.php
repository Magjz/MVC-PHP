<?php
namespace App\Models;

Use \PDO;
/**
 * Classe implémentant le singleton pour PDO
 */

class Database extends \PDO {

    private static $_instance = null;
    
	public function __construct( ) {
	
	}
	
	/* Singleton */
    public static function getInstance() 
    {
        if (is_null(self::$_instance)) 
        {	
            try 
            {
                $dsn = "mysql:host=".Config::get('HOST').";port=".Config::get('PORT').";dbname=".Config::get('DB');
                $db = new \PDO($dsn, Config::get('USERNAME'), Config::get('PASSWORD'));
                $db->exec("SET CHARACTER SET utf8");
                //echo "Connection to DB successfull\n";
                self::$_instance = $db;
            }
            catch(\PDOException $e) 
            {
                error_log($e->getMessage(), 3, Config::get('ERROR_LOG_FILE'));
                error_log("Error connection to DB", 3, Config::get('ERROR_LOG_FILE'));
                echo "Error connection to DB\n";
            }
		} 
		return self::$_instance; 
	}

}

// Pour instancier la class 




