<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="font-family: Poppins; background-color: #FAE3B6">
    <div class="d-inline-flex w-screen">
        <div class="w-50 ms-5">
            <a class="text-decoration-none text-dark" href="/"><h1 class="fw-bold mt-3 mb-3" style="font-family: Poppins; background-color: #FAE3B6">D'OUTFIT</h1></a>

            <div class="text-center mt-2">
                <div class="d-inline-flex">
                    <h5>Already have an account?</h5>
                    <a class="text-decoration-none text-dark" href="/login"><h5 style="color: #F59C15;" class="ms-2"> Log in</h5>
                </div>

                <div class="text-center">
                    <div class="d-inline-flex p-4">
                        <img class="pt-3 pb-4" src="garis.png" alt="">
                        <h4 class="ms-3 me-3">OR</h4>
                        <img class="pt-3 pb-4" src="garis.png" alt="">
                    </div>
                </div>

                <div class="d-inline-flex">
                    <div style="box-shadow: 0px 4px 4px 0px #00000040; border-radius: 20px;">
                        <button type="button" class="btn btn-light"
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
                        </button>
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
                                    <img style="height: 31px;
                            width: 31.730640411376953px;
                            left: 402.2828369140625px;
                            top: 250px;
                            border-radius: 0px;
                            "src="icon/Facebook.png"
                                        alt="" class="pt-2 pe-2">
                                    <p
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

            <div class="p-5 mt-2">
                <form id="register" method="POST" action="{{ route('register') }}">
                    @csrf

                    <p
                        style="font-family: Frank Ruhl Libre;
                        font-size: 24px;
                        font-weight: 500;
                        line-height: 31px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #868686;">
                        {{ __(' Full Name') }}
                    </p>

                    <input id="name" type="text"
                        class="form-control
                    @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus
                        style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class="mt-3" style="font-family: Frank Ruhl Libre;
                            font-size: 24px;
                            font-weight: 500;
                            line-height: 31px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #868686;">
                        {{ __('Email') }}
                    </p>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;"
                    >

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class="mt-3" style="font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; line-height: 31px; letter-spacing: 0em; text-align: left; color: #868686;">
                            {{ __('Password') }}
                    </p>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;">

                    @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                    <p class="mt-3" style="font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; line-height: 31px; letter-spacing: 0em; text-align: left; color: #868686;">
                        {{ __('Confirm Password') }}
                    </p>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="width: 633px; height: 55px; box-sizing: border-box; border: 1px solid #C5C5C5; border-radius: 20px;">
                </form>
            </div>

            <div class="mt-1 pt-3 text-center">
                <button type="submit" form="register" class="text-dark" style="background: linear-gradient(0deg, #FAE3B6, #FAE3B6);
                box-shadow: 0px 4px 4px 0px #00000040; border-radius: 20px; height: 60px; width: 472px; border-radius: 20px; font-family: Frank Ruhl Libre; font-size: 24px; font-weight: 500; text-align: center;">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        <img src="register.png" alt="" class="ms-5 ps-5">
    </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
            </script>
</body>

</html>
