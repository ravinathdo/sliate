<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>SLIATE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
        <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
        <!-- liteAccordion is Homepage Only -->
        <link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
        <link href="layout/styles/sliate-style.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style type="text/css">
            .sliate-center{
                float: left;
                margin-right: auto;
                margin-left: auto;
                width: 79%;
                text-align: center;
            }

            #logo-sliate {
                float: left;
                height: 10%;
                width: 100px;
            }

            #logo-gov {
                float: right;
                height: 10%;
                width: 100px;
                text-align: right;


                table{

                }
            }

        </style>

    </head>
    <body id="top">
        <div class="wrapper row1">
            <div id="header" class="clear">

                <div id="logo-sliate"><img src="images/sliate-logo.png" width="82" height="99"/></div>
                <div class="sliate-center" > <!-- <div class="fl_left sliate-center" > -->
                    <h4><a href="index.html">Sri Lanka Institute Of Advanced Technological Education </a></h4>
                    <h5>Ministry of Higher Education</h5>
                </div>
                <div id="logo-gov"><img src="images/gov-logo.png" width="82" height="99"/></div>


                <!--
                <form action="#" method="post" id="login">
                  <fieldset>
                    <legend>Student Login</legend>
                    <input type="password" />
                    <input type="text" />
                    <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
                    <input type="image" src="layout/images/sign_in.gif" id="signin" alt="Sign In" />
                  </fieldset>
                </form>
                
                -->

            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row2">
            <div id="topnav">
                <?php include('menu.php'); ?>
                <div  class="clear"></div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row3">

        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row4">
            <div id="container" class="clear"> 
                <!-- ####################################################################################################### -->


                <div id="homepage" class="clear">
                    <p></p>

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="email" name="username"  class="form-control" id="inputEmail3" placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" name="password"  class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="btnLog" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    include_once './_function.php';
                    ?>

                    <?php
                    if (isset($_POST['btnLog'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Create connection
                        include './_function.php';
                        $conn = getDBConnection();
// Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT * FROM user WHERE username = '$username' AND PASSWORD = PASSWORD('$password') AND status = 'ACT' ";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                $_SESSION['user_id'] = $row["id"];
                                $_SESSION['user_username'] = $row["username"];
                                $_SESSION['user_role'] = $row["role"];
                                $_SESSION['user_firstname'] = $row["firstname"];


                                header("Location:home.php");
                            }
                        } else {
                            ?>
                            <div class="msgCenter">
                                <span class="btn btn-danger">Invalid username or password</span>
                            </div>
                            <?php
                        }

                        mysqli_close($conn);
                    }
                    ?> 

                </div>
                <!-- ############### -->
            </div>
            <!-- ####################################################################################################### --> 
        </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper row5">
            <div id="footer" class="clear"> 
                <!-- ####################################################################################################### -->

                <!-- ####################################################################################################### --> 
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper">
            <div id="copyright" class="clear">
                <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
            </div>
        </div>
        <!-- liteAccordion is Homepage Only --> 
        <script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
        <script type="text/javascript">
            $("#featured_slide").liteAccordion({
                theme: "os-tpl",
                containerWidth: 960, // fixed (px)
                containerHeight: 360, // fixed (px) - overall height of the slider
                headerWidth: 48, // fixed (px) - slide spine title
                firstSlide: 1, // displays slide (n) on page load
                activateOn: "click", // click or mouseover
                autoPlay: false, // automatically cycle through slides
                pauseOnHover: true, // pause slides on hover
                rounded: false, // square or rounded corners
                enumerateSlides: true, // put numbers on slides
                slideSpeed: 800, // slide animation speed
                cycleSpeed: 6000, // time between slide cycles
            });
        </script>






    </body>
</html>