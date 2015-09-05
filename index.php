<?php
/*
 *  CODED BY MAHDI HAZAVEH
 *  <mahdi@hazaveh.net>
 */
require_once 'includes.php';
?>
<html>
    <head>
        <title>HLivePHPJS COMPILER - Live PHP & Javascript Compiler</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/font-hack/2.010/css/hack.min.css">
        <meta charset="utf-8"/>
    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <a class="navbar-brand" href="#">HLivePHPJS - Live PHP & Javascript Compiler</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" id="compile">COMPILE</a></li>
                        <li><a href="http://www.hazaveh.net/tools/hlivephpjs-live-php-and-javascript-compiler">HELP</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <form action="index.php" method="post" id="form">
                            <div id="editor"><?php getCode(); ?></div>
                            <textarea class="form-control phpinput" id="code" rows="20" name="code"></textarea>
                    </div>

                    </form>

                </div>
                <div class="col-lg-6">
                    <div class="phpoutput">
                        <?php
                        if (isset($_POST['code']) && !empty($_POST['code'])) {
                            $compiler = new compiler();
                            $compiler->genFile();
                            $compiler->includeFile();
                            $compiler->deleteFile();
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="footer">Coded and Developed by <a href="http://www.hazaveh.net/" target="_blank">Mahdi Hazaveh</a></div>
        </div>
        <script src="assets/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/src-min-noconflict/theme-twilight.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/src-min-noconflict/mode-php.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/php");
        </script>
    </body>
</html>

