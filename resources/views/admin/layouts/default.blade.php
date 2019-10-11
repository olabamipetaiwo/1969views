<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LearnNet Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ URL::asset('admin/images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('admin/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/font-awesome.min.cs') }}s">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/assets/scss/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('admin/assets/css/mycss.css') }}"> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
    <body>
        

    <!-- Left Panel/Navbar -->
       @include('admin.layouts.navbar')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
          @include('admin.layouts.header')
        <div class="content mt-3">
           @include('admin.layouts.alert')

            <div class="col-sm-12  tm-3">
               @yield('content')
            </div>

       
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="{{ URL::asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/script.js') }}"></script>
    </body>
</html>

