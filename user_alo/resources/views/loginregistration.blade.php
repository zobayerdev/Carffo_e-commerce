<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Welcome to Ashar Alo Shop - your one-stop destination for premium quality products. Explore our collection of Asha, Asharalo, and more.">
    <meta name="keywords" content="asha, asharalo, asha alo, ASHAR shop, premium products, high-quality, online shopping">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login || Registration</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0Y5TLG7WD0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-0Y5TLG7WD0');
        </script>


    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <style>
        /* Additional CSS for responsiveness */
        @media only screen and (max-width: 600px) {
            .main {
                width: 100%;
            }
            .signup,
            .login {
                width: 100%;
            }
            input[type="text"],
            input[type="email"],
            input[type="password"],
            button {
                width: 100%;
                margin-bottom: 10px;
            }

        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

    </style>
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">

        <form action="{{route('createRegistration')}}" method="post">
            @csrf
            <label for="chk" aria-hidden="true">Sign up</label>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <input type="text" name="txt" placeholder="User name" maxlength="50" required="">
            <input type="email" name="email" placeholder="Email" maxlength="50" required="">
            <input type="password" name="password" placeholder="Password" maxlength="20" required="">
            <button type="submit">Sign up</button>
        </form>
    </div>

    <div class="login">

        <form id="loginForm" action="{{ route('login') }}" method="post">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" id="email" placeholder="Email" maxlength="50" required>
            <input type="password" name="password" placeholder="Password" maxlength="20" required>
            <button type="submit">Login</button>
        </form>
        <div class="forgot-password">
            <a href="{{ route('password.request') }}" id="forgotPassword">Forgot Password?</a>
        </div>
    </div>

    <script>
        document.getElementById("forgotPassword").addEventListener("click", function(event) {
            event.preventDefault(); // Prevents the default action of the anchor tag

            var email = document.getElementById("email").value; // Get the email value

            // Check if email field is empty
            if (email.trim() === "") {
                alert("Please fill up the email field.");
                return;
            }

            // Append email as a query parameter to the forgot password link
            var forgotPasswordUrl = "{{ route('password.request') }}?email=" + encodeURIComponent(email);

            // Navigate to the forgot password page
            window.location.href = forgotPasswordUrl;
        });
    </script>



</div>
</body>
</html>
