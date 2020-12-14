<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- header -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">menuA</a></li>
                <li><a href="#">menuB</a></li>
                <li><a href="#">menuC</a></li>
            </ul>            
        </div>
    </nav>

    <!-- content -->
    <div class="row" id="content" style="padding:0 0 0 80px">
        <!-- left -->
        <div class="col-md-3">
            <!-- パネルで囲む -->
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                <!-- 敢えてbodyを作らないことで、メニューを詰める -->
                <!-- <div class="panel-body"> -->
                <ul class="nav nav-pills nav-stacked">
                    <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu1</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu2</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu3</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-menu-right"></i> submenu4</a></li>
                </ul>
                <!-- </div> -->
            </div>
        </div>

        <!-- main -->
        <div class="col-md-9">
            <div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
                <h1><small>タイトル</small></h1>
            </div>
        </div>
    </div>
<div class="row">
    <!-- footer -->
    <footer class="footer">
  <div class="container">
  <p class="text-muted">Place sticky footer content here.</p>
  </div>
</footer>
</body>
</html>