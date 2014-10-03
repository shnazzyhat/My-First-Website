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
        <style type="text/css">
        p {
            font-size: 20px;
            color: red;
        }
        div {
            font-size: 22px;
            color: orange;
        }
        .favorite {
            font-weight: bold;
            text-decoration: underline;
        }
        #liam {
            color: purple;
        }
        #steve {
            color: pink;
            background-color: gray;
            padding: 10px;
            margin-bottom:40px;
            margin-top:40px;
            width: 50%;
            float: left;
        }
        #eric {
            color: green;
            float: right;
            width: 30%;
            font-size: 18px;
            font-weight: bold;
            margin-left: 20px;
            margin-right: 20px;
        }
        .clearfix {
            clear: both;
            min-height:1px;
            display:block;
            margin:0;
            height:0;
        }
        .container {
            margin-top:20px;
            margin-left:auto;
            margin-right:auto;
            width: 1080px;
            background-color: #e5e5e5;
        }
        .my-special-list {
            color: teal;
            font-size: 18px;
        }

        .my-special-list li {
            display: inline-block;
            list-style-type: none;
            padding: 0;
            margin: 0;
            height: 30px;
            line-height:30px;
            padding: 7px 10px;
            border-radius: 4px;
            background-color: red;
            color: white;
        }
        .my-special-list li img {
            max-height:100%;
        }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div class="favorite">This is also my favorite</div>
            <p class="favorite">This is also a paragraph</p>

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
