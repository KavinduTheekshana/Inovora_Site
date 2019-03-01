<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>{{$title}} | Web Development,Web Design & Enterprise Application Company in Sri Lanka</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body class="fullpage">
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-register-form">
                    <div class="form-holder">
                        <div class="form-row form-head">
                            <div class="col-xs-6">
                                <a class="site-brand" href="/"><img src="images/logonew.svg" alt="Hustbee"></a>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-title"><img src="images/lock.svg" alt="">Client Area</div>
                            </div>
                        </div>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>