<!DOCTYPE html>
<html lang="ar" dir="rtl" ng-app="TranslatorApp">
<head>
    <meta charset="UTF-8">
    <title>Translator</title>
    <link href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- RTL Bootstrap -->
    <link href="../../assets/bower_components/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body{
            padding-top: 10px;
        }
        .container {
            width: 1280px;
        }

        .result-view .inner, .original-view .inner{
            border: 1px solid #cccccc;
            border-radius: 2px;
            min-height: 500px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">مترجم المقالات</a>
                </div>
                <p class="navbar-text navbar-left">برمجة
                <a  class="navbar-link" href="mailto:saleh.saiid@gmail.com">صالح سعيد</a></p>
            </div><!--/.container-fluid -->
        </nav>

        <div class="row">
            <div class="col-xs-12">
                <form class="form-inline">
                    <div class="form-group col-xs-10">
                        <input type="url" placeholder="رابط المقال" class="form-control input-lg" style="width: 100%">
                    </div>
                    <div class="form-group col-xs-2">
                        <button class="btn btn-success btn-lg btn-block">إرسال</button>
                    </div>
                </form>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-xs-6 result-view" id="arabic-text">
                <div class="inner">
                    fgf
                </div>
            </div>
            <div class="col-xs-6 original-view" id="english-text">
                <div class="inner">
                    ss
                </div>
            </div>
        </div>

        <hr />
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js" type="application/javascript"></script>
</body>
</html>