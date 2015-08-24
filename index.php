<?php
/*** parse the ini file ***/
$config = parse_ini_file("config.ini", 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id='fb-root'></div>
<script src='https://connect.facebook.net/en_US/all.js#xfbml=1'></script>
<script>
    FB.init({
        appId: '<?php echo $config['facebook']['facebook_id'] ?>',
        status: true, // check login status
        cookie: true, // enable cookies to allow the server to access the session
        xfbml: true// parse XFBML
    });

    FB.Canvas.setAutoGrow();
</script>
<div class="container" id="enter">
    <div class="row">
        <img src="images/landing.jpg" alt="" class="img-responsive" style="cursor:pointer;"/>
    </div>
</div>
<script>
    $('#enter').click(function() {
        window.location.href = "enter.php";
    });
</script>
</body>
</html>

