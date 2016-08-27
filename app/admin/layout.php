
<?php if ($page2 == 'login') { ?>

<?php require_once(ROOT.DS.'app'.DS.'admin'.DS.'content.php') ?>
            
<?php }else{ ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="/admin_asset/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/admin_asset/css/sb-admin.css" rel="stylesheet">
       
        <!-- Morris Charts CSS -->
        <link href="/admin_asset/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/admin_asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--=== CSS ===-->
        <!-- jQuery -->
        <script src="/admin_asset/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/admin_asset/js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript 
        <script src="/admin_asset/js/plugins/morris/raphael.min.js"></script>
        <script src="/admin_asset/js/plugins/morris/morris.min.js"></script>
        <script src="/admin_asset/js/plugins/morris/morris-data.js"></script>
        -->
    </head>
    <body>
        <div id="wrapper">
            
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php require_once(ROOT.DS.'app'.DS.'admin'.DS.'navbar.php') ?>
            </nav>

            <!-- Navigation end -->

            <?php require_once(ROOT.DS.'app'.DS.'admin'.DS.'content.php') ?>

        </div>
        <!-- /#wrapper -->
    </body>
</html>
<?php } ?>