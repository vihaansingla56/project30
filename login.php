<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="./styles/register.css" rel="stylesheet" />
    <title>Register</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://d19m59y37dris4.cloudfront.net/directory/2-0-1/img/logo.svg" alt=""
                    class="d-inline-block align-text-top" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary register-button" href="./register.php" role="button">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="form">
        <div class="form-signin">
            <form class="form-container" action="./db/login_db.php" method="post">
                <!-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
                <div class="heading-container">
                    <h1 class="h4 mb-3 fw-normal">Login</h1>
                </div>
                <div class="form-container">
                    <div class="status"></div>
                    <div class="form-floating my-2">
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button id="button" class="w-100 btn btn-lg btn-primary my-2" type="submit">
                        Login
                    </button>
                </div>
            </form>

            <div class="login-footer">
                Create a new account?
                <a class="login-link" href="#" data-purpose="login-link-signup-popup">
                    Sign in
                </a>
            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="./scripts/login_script.js"></script>
</body>

</html>