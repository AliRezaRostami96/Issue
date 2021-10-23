<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{@asset('css/bootstrap/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{@asset('css/FontAwesome/all.min.css')}}">

    <title>Login</title>
    <style>
        .w-100.h-100.d-flex.justify-content-center {
            background: rgb(23,43,77);
            background: linear-gradient(-10deg, rgba(23,43,77,1) 0%, rgba(23,43,77,1) 49%, rgba(126,96,228,1) 51%, rgba(126,96,228,1) 100%);
        }
        form {
            width: 400px;
            max-width: 90%;
        }
    </style>
</head>
<body dir="rtl" class="vh-100">
<div class="w-100 h-100 d-flex justify-content-center align-items-center flex-column">
    <div class="text-white text-center">
        <h1 class="fw-bold mb-4">Login</h1>
        <p class="h5 mb-4">
            Please login to your account to access dashboard panel.
        </p>
    </div>
    <form action="/" class="needs-validation shadow d-inline-block p-4 rounded-3 bg-white" novalidate>
        <div class="form-row">
            <div class="col-12 mb-3">
                <label for="UserName">User Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text h-100" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control shadow-none" id="UserName" placeholder="User Name" value="" required>
                    <div class="invalid-feedback">
                        Please insert your UserName!
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="password">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text h-100" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control shadow-none" id="password" placeholder="Password"
                           aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please insert your Password!
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3 d-flex">
                <div class="col-12 col-md-6">
                    <input type="text" class="form-control shadow-none" id="captcha" placeholder="Captcha" required>
                    <div class="invalid-feedback">
                        Please insert Captcha!
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    Captcha
                </div>
            </div>
            <div class="form-check col-12 mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>

</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    console.log(forms);
                    console.log(form);
                    console.log(event);
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
