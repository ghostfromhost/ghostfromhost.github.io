<?php
	namespace KPD;
		
	class cookie 
	{
		public $hello_world = 'Hello world'; 
		private static function gen_Cookie_Code($length = 15) {
			$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    		$numChars = strlen($chars);
    		$string = '';
    		for ($i = 0; $i < $length; ++$i) {
        		$string .= substr($chars, rand(1, $numChars) - 1, 1);
    		}

    		return $string;
		}

		public static function create_Cookie() {
			//$dbn = new PDO('mysql:host=localhost;dbname=kpd_blog', 'root', 'Rjcnzgjnfgjd94', array(PDO::ATTR_PERSISTENT => true));
			setcookie('kpd_blog',self::gen_Cookie_Code());
		}
	}
?>