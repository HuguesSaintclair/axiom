<?php

    require_once(__DIR__ .'\config\database.php');
    require_once(__DIR__ .'\controller\dbConnector.php');
    require_once(__DIR__ .'\fonctions\function_eleve.php');

    if(!isset($_SESSION["id"]))
    {
        header("Location:index.php");
    }

    //$_SESSION["id"]=(string)$_GET["sess"];
   
    $id_eleve=(int)$_SESSION["id"];

   if (!empty($_SESSION["classe"])) {
       $classe=$_SESSION["classe"];
   }

   if (!empty($_SESSION["ue"])) {
       $ue=$_SESSION["ue"];
   }

    //include 'functions/main-function.php';

    $pages=scandir('Eleve/');
   

    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
        $page=$_GET['page'];
    }
    else {
        $page='mesCours';
    }

    /*$pages_functions=scandir('functions/');

    if(in_array($page.'.funct.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }*/


?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Axiom | Mes cours</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <!-- notifications CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="assets/css/notifications/notifications.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<?php
require_once(__DIR__ .'/Eleve/menu_2.php');
require_once(__DIR__ .'/Eleve/barre_Id_3.php');
require_once(__DIR__ .'/Eleve/'.$page.'.php');

?>

<!--div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2021. All rights reserved. By <a href="https://colorlib.com/wp/templates/">Pemi Samir</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    <!-- jquery
		============================================ -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup/waypoints.min.js"></script>
    <script src="assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="assets/js/morrisjs/raphael-min.js"></script>
    <script src="assets/js/morrisjs/morris.js"></script>
    <script src="assets/js/morrisjs/morris-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="assets/js/data-table/bootstrap-table.js"></script>
    <script src="assets/js/data-table/tableExport.js"></script>
    <script src="assets/js/data-table/data-table-active.js"></script>
    <script src="assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="assets/js/calendar/moment.min.js"></script>
    <script src="assets/js/calendar/fullcalendar.min.js"></script>
    <script src="assets/js/calendar/fullcalendar-active.js"></script>
     <!-- notification JS
        ============================================ -->
    <script src="assets/js/notifications/Lobibox.js"></script>
    <script src="assets/js/notifications/notification-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="assets/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="assets/js/tawk-chat.js"></script>
</body>

</html>