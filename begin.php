<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/kpd.css">
        <link rel="stylesheet" href="css/coub.css">
        <style type="text/css">
            .coub_kpd div {
                border:1px solid black;
            }
            #myCube1 {
                width:70%;
            }
            .coub_kpd {
                margin-top: 40px;
            }

            .coub_kpd img {
                height: 100%;
            }

            .menu_kpd {
                margin-top: 60px;
            }
        </style>
		<script src="js/jquery-3.0.0.min.js">
		</script>
		<script src="js/bootstrap.js">
		</script>
		<script src="js/jquery.transit.min.js">
		</script>
        <script src="js/carousel/owl.carousel.js">
        </script>
        <script src="js/kpd.js">
        </script>
        <script src="js/coub.js">
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                var size = $('.coub_kpd').parent().width();
                $('.coub_kpd').coub_menu({size:size*0.5,animation_duration:0.8,handler_for_roll:'click'},$('.menu_kpd'));
            });
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

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                    <img alt="First slide" src="img/maxresdefault_urez.png">
                </div>
                <div class="item">
                    <img alt="Second slide" src="img/antimage.png" width="auto" height="auto">
                </div>
                <div class="item active">
                    <img alt="Third slide" src="img/Science_innovators_horiz_metalblue.svg">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <div class='container'>
            <h1 class="text-center page-header">Рабочее окружение</h1>
            <div class='row'>
                <div class='col-md-6 .col-xs-12'>
                    <div class="btn-group-vertical btn-group-lg menu_kpd center-block" id='myCube1' data-toggle="buttons">
                        <label class="btn btn-primary btn-block">
                            <input type="radio" name="options" id="option1"> BOOTSTRAP
                        </label>
                        <label class="btn btn-primary btn-block">
                            <input type="radio" name="options" id="option2"> CSS
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> HTML
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> JavaScript
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> JQuery
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> Zend 2
                        </label>
                    </div>
                </div>
                <div class='col-md-6 .col-xs-12 center-block clearfix'>

                    <div class='coub_kpd center-block'>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/tyr.png"  >
                            </a>
                        </div>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/post-31292802.png" >
                            </a>
                        </div>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/HTML5_logo_and_wordmark.svg.png" >
                            </a>
                        </div>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/javascript-function-declaration-vs-function-expression.png" >
                            </a>
                        </div>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/687474703a2f2f707265636973696f6e2d736f6674776172652e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031342f30342f6a5175726572792e676966.gif" >
                            </a>
                        </div>
                        <div>
                            <a href="#" class="thumbnail">
                                <img src="img/53df8a3801b5d.png" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-center page-header">Дальше</h1>
    </div>
	</body>
</html>