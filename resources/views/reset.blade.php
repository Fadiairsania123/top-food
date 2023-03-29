
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Forgot Password</span>
                @if ($message = Session::get('success'))
                    <div id="alert" style="color:rgb(4, 255, 113)" class="alert alert-success alert-block mb-3">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div id="alert" style="color:red" class="alert alert-danger alert-block mb-3">
                        {{ $message }}
                    </div>
                @endif
                <form action="{{route('verifyLinkResetAction')}}" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="hidden" name="secret" value="{{ $user_token }}">
                        <input name="password" type="password" placeholder="Enter Password" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password_confirmation" type="password" placeholder="Enter Password Confirmation" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Submit">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="{{ route('login') }}" class="text">Login Now</a>
                    </span>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
