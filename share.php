<?php
include 'inc/formClass.php';
/*** parse the ini file ***/
$config = parse_ini_file("config.ini", 1);
$usr = new formClass; //create new instance of the class Users
$shareText = $usr->getShareText();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Open Graph meta tags -->
        <meta property="og:title" content="<?php echo $config['facebook']['client'] ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php echo $config['facebook']['app_link'] ?>images/share.png" />
        <meta property="og:url" content="<?php echo $config['facebook']['app_link'] ?>share.php" />
        <meta property="og:description" content="<?php echo $shareText[0];?>"/>
        <title>Share Message</title>
    </head>

    <body>
    <script src='https://connect.facebook.net/en_US/all.js#xfbml=1'></script>
    <div id="fb-root"></div>
    <script>
        window.location.href = "<?php echo $config['facebook']['facebook_link'] ?>";
    </script>


    </body>
    </html>