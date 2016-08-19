<?php 
namespace KPD;

class database {
	private static $connection = array('lol' => 12); //new \PDO('mysql:host=localhost;dbname=kpd_blog', 'root', 'Rjcnzgjnfgjd94', array(\PDO::ATTR_PERSISTENT => true));
	public static function Check_isset_user(){
		  //self::connection->query('SELECT user');
		
	}
	public static function Protected_Query($query,$values) {
		//$stmt = self::connection->prepare($query);
		$connection = new \PDO('mysql:host=localhost;dbname=kpd_blog', 'root', 'Rjcnzgjnfgjd94', array(\PDO::ATTR_PERSISTENT => true));
		$stmt = $connection->prepare($query);
		$type_base = array('string' => \PDO::PARAM_STR, 'integer' => \PDO::PARAM_INT, 'boolean' => \PDO::PARAM_BOOL);
		$i = 1;
		foreach ($values as $type => $value) {
			$stmt -> bindParam($i,$value,$type_base[$type]);
			$i++;
		}
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
?>