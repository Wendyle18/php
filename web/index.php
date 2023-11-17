<?php 
    $page = "pages/dashboard.php";
    $style= "/web/assets/css/dashboard.css";
    $error = false;
    $pages = array ("dashboard", "admin", "profile", "editProfile", "logOut");
    $urlSegments = explode ("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if (array_key_exists ("3", $urlSegments) ){
        switch ($urlSegments[3]){

            case "dashboard":
                                $page = "pages/dashboard.php";
                                $style = "/web/assets/css/dashboard.css";
                                break;
            case "admin":
                                $page = "pages/mobileadmin.php";
                                $style = "/web/assets/css/mobileadmin.css";
                                break;
            case "profile": 
                                $page = "pages/mobileProfile.php";
                                $style = "/web/assets/css/mobileprofile.css";
                                break;
            case "editProfile":
                                $page = "pages/editMobile.php";
                                $style = "/web/assets/css/editMobile.css";
                                break;
            case "logOut":
                                $page ="pages/mobile.php";
                                $style = "/web/assets/css/mobile.css";
                                break;
            default:
                                $error = true;
                                $page = "pages/404.php";
                                $style = "/web/assets/css/404.css";

        }
    }
?>


<!DOCTYPE html>
<!--suppress HtmlDeprecatedAttribute -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/assets/css/fontawesome/fontawesome.css">
    <link rel="stylesheet" href="/web/assets/css/fontawesome/solid.css">
    <link rel="stylesheet" href="/web/assets/css/main.css">
    <link rel="stylesheet" href="<?= $style ?>">
    <link rel="icon" type="image" href="/web/assets/img/2.png">
    <title></title>
</head>

        <body>
                <?php 
                        if(!$error){
                            require ("elements/header.php");
                            require ("elements/sidebar.php");
                            require ($page);
                            require ("elements/footer.php");
                        }else{
                            require ($page);
                        }
                ?>
        </body>
        
</html>