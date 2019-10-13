<!doctype html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1969 Admin Login</title>
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
<body class="bg-dark">
       

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                <div class="login-logo">
                      <h4 class="text-primary">1969views ADMIN LOGIN</h4>
                </div>
                 <div class="container">
                    <div class="row">
                        @include('admin.layouts.alert')
                    </div>
                </div>
                <form action="{{ route('admin.login') }}" method="post" > 
                    {{ csrf_field() }}
                    
                        <div class="form-group">
                            <label>Email address</label>
                            <input 
                                type="email"
                                name="email" 
                                value="{{ Request::old('email') }}"
                                class="form-control" 
                                placeholder="Email" 
                                >
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                             @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input 
                                type="password"
                                name="password" 
                                class="form-control"
                                value="{{ Request::old('password') }}"
                                placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                        </div>

                       
                        
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                      
                       
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ URL::asset('admin/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/js/script.js') }}"></script>


</body>
</html>
