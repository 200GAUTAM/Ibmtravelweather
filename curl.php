<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>Travelia - Travel Agency, Responsive - Hotel Online Booking</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

        <!-- Head Libs -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->
    </head>
    <body>






<?php
session_start();
$x = $_POST['x'];
$y = $_POST['y'];
$_SESSION['x'] = $x;
$_SESSION['y'] = $y;
$city_name = $_POST['city'];
//$offset = $_POST['offset'];

$login = '8690a9f8-ed0f-4ef9-9483-d914222cd4bd';
$password = '5bgirrALV0';
$url = "https://twcservice.mybluemix.net/api/weather/v1/geocode/".$x."/".$y."/forecast/daily/10day.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.99 Safari/535.1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
curl_setopt($ch, CURLOPT_VERBOSE,true);
$data = curl_exec($ch);
$data = json_decode($data, true);
curl_close($ch);  
$code_json =  $data['forecasts']['0']['night']['icon_code'];
$code_url = "weathericons/icon";
$code_png = ".png";
$code = $code_url.$code_json.$code_png;

$narrate =  $data['forecasts']['0']['night']['narrative'];


?>


<?php
if(((int)$code_json  >=0 && (int)$code_json<=4) )
{
	echo "Thunderstroms and The worst Climate Recommend not to visit";
}

else if(((int)$code_json >=5 && (int)$code_json<=27) || ((int)$code_json >=42 || (int)$code_json<=47))
{


?>

<section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <!-- Title -->
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><?php echo $narrate; ?></h2>
                                    <i class="fa fa-plane"></i>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <!-- End Title-->

                        <!-- boxes-carousel-->
                        <div id="boxes-carousel">
                            <!-- Item carousel Boxed-->
<?php

for ($x = 0; $x <= 10; $x++) {
    
 ?>
                           <div>
                                <div class="img-hover">
                                    <img src="snow_rain/snow<?php echo $x;?>.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/gallery-2/1.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>

                                
                            </div>

  <?php                         
}

?>         
                    </div>
                        <!-- End boxes-carousel-->
                    </div>
                    <!-- End Info Resalt-->
                </section>   










<?php





	
}

else if((int)$code_json >=28 && (int)$code_json<=31)
{












?>

<section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <!-- Title -->
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><?php echo $narrate; ?></h2>
                                    <i class="fa fa-plane"></i>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <!-- End Title-->

                        <!-- boxes-carousel-->
                        <div id="boxes-carousel">
                            <!-- Item carousel Boxed-->
<?php

for ($x = 0; $x <= 4; $x++) {
    
 ?>
                           <div>
                                <div class="img-hover">
                                    <img src="summer/cool<?php echo $x;?>.jpg" alt="" class="img-responsive">
                                    
                                </div>

                                
                            </div>

  <?php  
                       
}

?>
                            

                          

                            
                        </div>
                        <!-- End boxes-carousel-->
                    </div>
                    <!-- End Info Resalt-->
                </section>   





















































<?php



































	
}

else if(((int)$code_json >=32 && (int)$code_json<=34) || (int)$code_json ==36)
{
	









?>

<section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <!-- Title -->
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><?php echo $narrate; ?></h2>
                                    <i class="fa fa-plane"></i>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <!-- End Title-->

                        <!-- boxes-carousel-->
                        <div id="boxes-carousel">
                            <!-- Item carousel Boxed-->
<?php

for ($x = 0; $x <= 4; $x++) {
    
 ?>
                           <div>
                                <div class="img-hover">
                                    <img src="summer/cool<?php echo $x;?>.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/gallery-2/1.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>

                                
                            </div>

  <?php                         
}

?>
                            

                          

                            
                        </div>
                        <!-- End boxes-carousel-->
                    </div>
                    <!-- End Info Resalt-->
                </section>   






















































<?php



	
}
























else if(((int)$code_json >=37 && (int)$code_json<=41) || (int)$code_json == 35)
{
	



?>

<section class="content_info">
                    <!-- Info Resalt-->
                    <div class="padding-bottom">
                        <!-- Title -->
                        <div class="container">
                            <div class="row">
                                <div class="titles">
                                    <h2><?php echo $narrate; ?></h2>
                                    <i class="fa fa-plane"></i>
                                    <hr class="tall">
                                </div>                    
                            </div>
                        </div>
                        <!-- End Title-->

                        <!-- boxes-carousel-->
                        <div id="boxes-carousel">
                            <!-- Item carousel Boxed-->
<?php

for ($x = 0; $x <= 10; $x++) {
    
 ?>
                           <div>
                                <div class="img-hover">
                                    <img src="snow_rain/snow<?php echo $x;?>.jpg" alt="" class="img-responsive">
                                    <div class="overlay"><a href="img/gallery-2/1.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                </div>

                                
                            </div>

  <?php                         
}

?>
                            

                          

                            
                        </div>
                        <!-- End boxes-carousel-->
                    </div>
                    <!-- End Info Resalt-->
                </section>   





















































<?php

	
}




?>

  <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>  
        <script src="js/jquery-ui.1.10.4.min.js"></script>                
        <!--Nav-->
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide Revolution-->
        <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>      
        <script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>    
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script>    
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->

        <!--Slider Function-->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay:"none",
                    delay:5000,
                    startwidth:1170,
                    startheight:970,
                    minHeight:500,
                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"preview1"
                });             
            }); //ready
        </script>
        <!--End Slider Function-->


</body>
</html>
