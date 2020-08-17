<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin | @yield("title")</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="{{ asset('metronic/assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('metronic/assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <link href="{{ asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css') }}" />
        <link href="{{ asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet') }}" type="text/css" />
        <link href="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css') }}" />

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('metronic/assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/assets/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('metronic/assets/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('metronic/favicon.ico') }}" />
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <link rel="stylesheet" href="MarkItUp/markitup/skins/simple/style.css" />
        <link rel="stylesheet" href="MarkItUp/markitup/sets/default/style.css" />


        @yield("css")

    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">

        <!-- BEGIN HEADER -->
        @include("layouts.admin.header")
        <div class="clearfix"> </div>
        <div class="page-container">
            @include("layouts.admin.sidebar")
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <h1 class="page-title"> @yield("title")
                        <small> @yield("subtitle")</small>
                    </h1>

                    <div class="page-bar">
                        <!--ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Blank Page</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Page Layouts</span>
                            </li>
                        </ul-->
                    </div>
                    @include("shared.msg")
                    @yield("content")
                </div>
            </div>
        </div>
        <div class="page-footer">
            <div class="page-footer-inner"> {{ date("Y") }} &copy; NDC Laravel CMS Project

                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <script src="{{ asset('metronic/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ asset('metronic/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('metronic/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>

            <script src="{{ asset('metronic/assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('metronic/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
            <script src="{{ asset('metronic/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
            <script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>


            <!-- END PAGE LEVEL PLUGINS -->

            @yield("js")

            <script>
                $(document).ready(function() {
                    setInterval(executeQuery, 2000);
                    function executeQuery(){
                        $.ajax({
                            url: "{{ asset('/notifications') }}",
                            success: function (data) {
                                var urgents= data.notifications;
                                $("#put_urgent").html('');
                                if(urgents.length>0){
                                    $("#not_count").html(urgents.length)

                                    for(i=0;i<urgents.length;i++){
                                        var url_urgent='javascript:;';
                                        if(urgents[i]['url']){
                                            url_urgent=urgents[i]['url'];
                                        }
                                        var html=' <li><a href="'+urgents[i]['data']['link']+'?nid=' +urgents[i]['id']+'" class="m-list-timeline__text">'+urgents[i]['data']['message']+'</a></li>';

                                        $("#breaking__news").show();
                                        $("#put_urgent").append(html);
                                    }
                                }else{
                                    $("#hade_urgent").val('no');
                                    $("#breaking__news").hide();
                                }
                            }
                        });

                    }
                });
            </script>
        </div>
    </body>
</html>
