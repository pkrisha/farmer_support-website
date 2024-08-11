<?php 
/**
 * 
 */
class Database
{
//	PRIVATE $server="MJPC\HPUSQLSERVER";
//	PRIVATE $server="HPUPC\HPUSQLSERVER";
	PRIVATE $host="localhost";
	PRIVATE $db = "soil";
	PRIVATE $uid = "root";
	PRIVATE $pwd = "Admin@123";
	private static $connection;
	Private static $instance;
	
	PRIVATE function __construct()
	{
		try
		{
			self::$connection = new PDO("mysql:host=$this->host;dbname = $this->db", $this->uid, $this->pwd);
			self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		}
		catch(PDOException $e){
			exit('Sorry, could not connect');
		}
	}

	PUBLIC static function connect(){
		if(!isset(self::$instance)){
			self::$instance = new Database();
		}
		return self::$connection;
	}

	function __destruct(){
		self::$connection=null;
	}
}
?>