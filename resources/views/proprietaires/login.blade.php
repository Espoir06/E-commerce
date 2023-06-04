<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Site</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('accueil/css/bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('accueil/css/fontawesome5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('accueil/css/style.css') }}">
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('accueil/images/icon.png') }}' />

    <style>
        body {
            background: #6e727e;
            overflow: hidden;
        }

        .login-area {
            background: #6e727e;
            overflow: hidden;
        }

        .login {
            max-width: 300px;
            width: 100%;
            margin: 10rem auto;
            background: #fff;
            box-shadow: 0 0 5px #999;
            padding: 1rem;
            border-radius: 5px;
        }

        .login .form-group label {
            margin-bottom: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="login-area">
            <div class="container">
                <div class="login">
                    <div class="login-text border-bottom text-center pb-2">
                        <h4>Login</h4>
                    </div>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                    <form action="{{ route('prop.connect.script') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button href="" class="btn color_1_bg mt-3">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
