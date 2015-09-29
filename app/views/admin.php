<!DOCTYPE html>
<html ng-app="admin599">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
        
        <script src="//use.typekit.net/owf6hsl.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>

        <link rel="stylesheet" href="<?php echo base_url() ?>/public/admin/css/main.css">
    </head>
    <body ng-class="{'no-scroll': modalOpen}">
    
        <main class="view" ng-view=""></main>

        <script src="//www.youtube.com/iframe_api"></script>
        <script src="//connect.soundcloud.com/sdk.js"></script>
        <script src="//w.soundcloud.com/player/api.js"></script>
        
        <script src="<?php echo base_url() ?>bower_components/jquery/dist/jquery.js"></script>
        <script src="<?php echo base_url() ?>bower_components/angular/angular.js"></script>
        <script src="<?php echo base_url() ?>bower_components/angular-route/angular-route.js"></script>
        <script src="<?php echo base_url() ?>bower_components/underscore/underscore.js"></script>

        <script src="<?php echo base_url() ?>/public/admin/js/app.js"></script>
        <script src="<?php echo base_url() ?>/public/admin/js/controllers.js"></script>
        <script src="<?php echo base_url() ?>/public/admin/js/directives.js"></script>
        <script src="<?php echo base_url() ?>/public/admin/js/services.js"></script>

        <script src="//localhost:35729/livereload.js"></script> 

    </body>
</html>
