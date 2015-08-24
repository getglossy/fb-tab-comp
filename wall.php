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
    <title>Thankyou</title>

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
<script src='//connect.facebook.com/en_US/sdk.js'></script>
<script>
    FB.init({
        appId: '<?php echo $config['facebook']['facebook_id'] ?>',
        version: 'v2.0'
    });

    FB.Canvas.scrollTo(0, 0); // scrolls to the top of the page. this property can also be used for navigation for one page competition

    FB.Canvas.setAutoGrow(); // this property is used to adapt to document height automatically
</script>
<style>
    area {
        outline:none;
    }
</style>
<div class="container">
    <div class="row">
        <img src="images/thanks.jpg" alt="" width="1170" class="img-responsive" usemap="#thanks"/>
        <map name="thanks"><area shape="rect" coords="47,1495,1114,1563" alt="" href="javascript:void(0);" onclick="openedOtherPage()">
          <area shape="rect"
           coords="46,1345,1120,1409" alt="" href="javascript:void(0);" onclick="shareCompetition()">
          <area shape="rect" coords="48,1423,1120,1487" alt="" href="javascript:void(0);" onclick="openedFacebookPage()">
      </map>
  </div>
</div>

<script src="js/Analytics.js"></script>
<script src="js/jquery.rwdImageMaps.min.js"></script>

<script>
    $(document).ready(function(e) {
        $('img[usemap]').rwdImageMaps();
    });

    /*
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    if( isMobile.any() )
    {
        $('.mobile').show();
    }
    else
    {
        $('.desktop').show();
    }
    */


    function shareCompetition() {
        shareCompAnalytic();
        window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $config['facebook']['app_link'] ?>detect.php', 'sharer', 'width=626,height=436');
    }

    function openedFacebookPage() {
        visitFacebookLinkAnalytic();
        window.open("<?php echo $config['facebook']['facebook_link'] ?>",'_blank');
    }

    function openedOtherPage() {
        visitOtherPageLinkAnalytic();
        window.open("<?php echo $config['facebook']['other_link'] ?>",'_blank');
    }
</script>
</body>
</html>