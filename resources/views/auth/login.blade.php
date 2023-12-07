<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NeeCall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-image: url('/img/andy-vult-t-WkBEOQngs-unsplash.jpg');">
    <div class="d-inline-flex w-screen">
        <div class="w-50 ms-5">
            <a class="text-decoration-none text-dark" href="/"><h1 class="fw-bold mt-3 mb-3" style="font-family: Poppins; background-color: #739072">NeeCall</h1></a>
            <div class="text-center mt-3 pt-5">
                <div class="d-inline-flex">
                    <div style="box-shadow: 0px 4px 4px 0px #00000040; border-radius: 20px;">
                        <a href="/auth/google" class="btn btn-light"
                            style="height: 61px;
                        width: 304px;
                        left: 61px;
                        top: 237px;
                        border-radius: 20px;">
                            <div class="d-inline-flex">
                                <img src="icon/google.png" alt="" class="pe-2">
                                <div class="pt-2">
                                    <p
                                        style="font-family: Frank Ruhl Libre;
                              font-size: 22px;
                              font-weight: 500;
                              line-height: 28px;">
                                        Sign up with Google</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ms-3" style="box-shadow: 0px 4px 4px 0px #00000040; border-radius: 20px;">
                        <button type="button" class="btn btn-primary"
                            style="height: 61px;
                        width: 304px;
                        left: 61px;
                        top: 237px;
                        border-radius: 20px;">
                            <div class="align-middle">
                                <div class="d-inline-flex">
                                    <img style="height: 32px;
                              width: 32px;
                              border-radius: 0px;
                              "src="icon/Facebook.png"
                                        alt="" class="pt-2 pe-2">
                                    <p class="pt-2"
                                        style="font-family: Frank Ruhl Libre;
                              font-size: 22px;
                              font-weight: 500;
                              line-height: 28px;">
                                        Sign up with Facebook</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <p class="mt-3 pt-3" style="font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; line-height: 31px; letter-spacing: 0em; text-align: left; color: #868686;">Email</p>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;">

                    @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                    <p class="mt-3" style="font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; line-height: 31px; letter-spacing: 0em; text-align: left; color: #868686;">Password</p>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;">

                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                    <div class="mt-3">
                        @if (Route::has('password.request'))
                        <a class="text-decoration-none text-dark" href="{{ route('password.request') }}">
                            <p style="font-family: Frank Ruhl Libre; font-size: 24px;font-weight: 500; line-height: 31px; letter-spacing: 0em; text-align: right;">
                                {{ __('Forgot Your Password?') }}
                            </p>
                        </a>
                        @endif
                    </div>

                    <div class="mt-3 pt-3 text-center">
                    <button type="submit" class="btn btn-primary" style="background: linear-gradient(0deg, #739072, #739072); box-shadow: 0px 4px 4px 0px #00000040; border-radius: 20px; height: 60px; width: 472px; border-radius: 20px;">
                        <p class="pt-2 text-dark"style="font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; text-align: center;">LOGIN</p>
                    </button>
                    </div>

                    <h5 class="text-center mt-4">Don't have an account? <a class="text-decoration-none text-primary" href="/register">Register Now!</a></h5>

                </form>
            </div>
        </div>
        <img src="login.png" alt="" class="ms-5 ps-5">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
