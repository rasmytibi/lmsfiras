<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebUni - Education Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="WebUni Education Template">
    <meta name="keywords" content="webuni, education, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href={{asset("frontEnd/img/favicon.ico")}} rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("frontEnd/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("frontEnd/css/font-awesome.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("frontEnd/css/owl.carousel.css")}}"/>
    <link rel="stylesheet" href="{{asset("frontEnd/css/style.css")}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
@include("frontEnd.layouts.header")
@yield('content')
@include("frontEnd.layouts.footer")
<!--====== Javascripts & Jquery ======-->
<script src={{asset("frontEnd/js/jquery-3.2.1.min.js")}}></script>
<script src={{asset("frontEnd/js/bootstrap.min.js")}}></script>
<script src={{asset("frontEnd/js/mixitup.min.js")}}></script>
<script src={{asset("frontEnd/js/circle-progress.min.js")}}></script>
<script src={{asset("frontEnd/js/owl.carousel.min.js")}}></script>
<script src={{asset("frontEnd/js/main.js")}}></script>
@yield('js')

</html>
