<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
       
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php ob_start(); ?>
        <div class="container">
            <div class="favorite">This is also my favorite</div>
            <p class="favorite">This is also a paragraph</p>
            <p></p>
            <div id="liam">      
            </div>
            <p id="steve" class="favorite">Hello world! SKYPE NEEDS TO DIE Boilerplate.</p>
            <p id="liam" class="favorite"> this shit is pretty tight. </p>
            <p id="eric">  pallys dont use haste</p>
            <p id="steve" class="favorite"> insert text about stuff here </p>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <p id="steve"> i guess pallys should use haste </p>
            <p id="eric"> no they should not </p>
            <p id="liam"> guys pls stahp fytng </p>
            <div class="clearfix"></div>
            <ul class="my-special-list">
                <li><a href="http://google.com" target="_blank">This is</a></li>
                <li><a href="https://www.facebook.com" target="_blank">A list</a></li>
                <li><a href="http://91ferns.com" target="_blank"><img src="http://upload.wikimedia.org/wikipedia/en/5/5f/Original_Doge_meme.jpg"></a></li>
            </ul>
        </div>
        <?php $contents = ob_get_clean();
        echo str_ireplace("haste", "parry", $contents); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
