<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Ngabe') }}</title>        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
        .register-box{
            width: 100%;
            margin: 3% auto;
            background: #f9f9f9;
            border: 2px solid #f5f5f5;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
            position: relative;
            border-radius: 3px;
        }

   .plan-type>h3 {
    color: #222;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
    }
    .plan-price {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 10px 0 30px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 30px;
    font-weight: lighter;
    line-height: 1;
}
.plan-price .dollar {
    font-size: 14px;
    -ms-flex-item-align: start;
    align-self: flex-start;
    padding-right: 3px;
    margin-left: -.7em;
}
.plan-features {
    font-size: 14px !important;
    text-align: left;
    font-weight:400;
}
</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="wrapper">
            <header>
                <div class="container clearfix">
                    <h1>{{ config('app.name', 'Ngabe') }} Overview <span>{{ date('Y-m-d') }}</span><a class="button">Change Date Range</a></h1>
                </div>
            </header>

            <div class="container clearfix">
            <div class="row">
                <div class="third widget" style="height: 164px;">
                    <h3>TOTAL CALLS</h3>
                </div>
                <div class="third widget line">
                    <div class="chart-legend">
                        <h3>Shipments per Day</h3>
                    </div>
                </div>
                <div class="third widget">
                    <div class="chart-legend">
                        <h3>Customer Service Assessment</h3>
                    </div>
                </div>
            
              </div>
              <div class="row">
                <div class="third widget doughnut">
                    <h3>Breakdown of Hours</h3>
                    <p><a href="" class="button">Filter By Employee</a></p>
                    <div class="canvas-container">
                        <canvas id="hours"></canvas>
                        <span class="status"></span>
                    </div>
                    <div class="chart-legend">
                        <ul>
                            <li class="ship">Shipping &amp; Receiving</li>
                            <li class="rework">Rework</li>
                            <li class="admin">Administrative</li>
                            <li class="prod">Production</li>
                        </ul>
                    </div>
                </div>
                <div class="third widget line">
                    <div class="chart-legend">
                        <h3>Civil status</h3>
                        <p><span>This Week</span> &mdash; <strong>Last Week</strong></p>
                        <p><a href="" class="button">Change Date Range</a><a href="" class="button">Filter by Location</a></p>
                    </div>
                    <div class="canvas-container">
                        <canvas id="shipments"></canvas>
                    </div>
                </div>
                <div class="third widget">
                    <div class="chart-legend">
                        <h3>Land Disputes</h3>
                        <p>based on words mentioned</p>
                        <p><a href="" class="button">Track another word</a></p>
                    </div>
                    <div class="canvas-container">
                        <canvas id="departments"></canvas>
                    </div>
                </div>
            
              </div>
            </div>
            <div class="push"></div>
        </div>
        <footer>
            <div class="container">
                &copy; {{ date('Y') }} {{ config('app.name', 'KAMARO') }} &mdash;
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    </body>
</html>