<?php
	use KPD\cookie;
	use KPD\database;
	//$Exp = new KPD\cookie();
	if(!isset($_COOKIE['kpd_blog'])){
		cookie::create_cookie();
	}
	$connection = new \PDO('mysql:host=localhost;dbname=kpd_blog', 'root', 'Rjcnzgjnfgjd94', array(\PDO::ATTR_PERSISTENT => true));
	$data = $connection->query('SELECT * FROM users');
	foreach ($data as $key_data => $value) {
		echo 'value[\''.$key_data.'\'] = '.$value['login'].' '.$value['id'];
	}
	//$connection = new PDO('mysql:host=localhost;dbname=kpd_blog', 'root', 'Rjcnzgjnfgjd94', array(\PDO::ATTR_PERSISTENT => true));
	$resultdd = database::Protected_Query('SELECT id FROM users WHERE login=?',['string'=>'kostya']);
	//var_dump($resultdd);
	//var_dump(cookie::show_method());
	//$Code = KPD\cookie::show_method();
	//var_dump($Exp->show_method());
	//var_dump($Exp.' + '.$Code);
	function __autoload($class) {

		$class =  str_replace('\\', '/', $class) . '.php';
		require_once($class);

	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery-3.0.0.min.js">
	</script>
	<script src="js/bootstrap.js">
	</script>
	<script src="js/jquery.transit.min.js">
	</script>
</head>
<body>
	<nav class="navbar navbar-default kpd-nav" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">GHOST</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Works</a></li>
                        <li><a href="#">About me</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#log_in_pop">Log in</a>
                            <div class='modal fade' id='log_in_pop' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Log in</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method='post'>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                            <button type="button" class="btn btn-primary">Сохранить изменения</button>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class='container'>
        	<form method='post'>

        	</form>
        </div>
</body>
</html>