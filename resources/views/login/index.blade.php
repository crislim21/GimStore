<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

    <title>GimStore</title>
</head>

<body>

    @include('partials.navbar')

    <div class="container-fluid p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item carousel-image bg-img-1 active py-5">
                    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                        <div class="row gx-lg-5 align-items-center mb-5">


                            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    The best library <br />
                                    <span style="color: hsl(218, 81%, 75%)">for your gaming world</span>
                                </h1>
                                <p class="mb-4 opacity-70 " style="color: rgb(255, 255, 255)">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Temporibus, expedita iusto veniam atque, magni tempora mollitia
                                    dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                                    ab ipsum nisi dolorem modi. Quos?
                                </p>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="card bg-light" style="--bs-bg-opacity: .90;">

                                    <div class="d-flex align-items-center justify-content-center ">
                                        <img src="/image/GimStore.png" alt="">
                                    </div>


                                    <div class="card-body px-4 py-5 px-md-5">
                                        <form action="/login" method="post">
                                            @csrf
                                            {{-- Email Address --}}
                                            <div class="input-div one">
                                                <div class="i">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <div>
                                                    <h5>Email address</h5>
                                                    <input type="text" class="input" name="email" id="email"
                                                        value="{{ Cookie::get('last_login') ? Cookie::get('last_login') : '' }}"
                                                        required>
                                                    @error('email')
                                                        <div class="invalid-feedback pt-4">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Password input -->
                                            <div class="input-div two">
                                                <div class="i">
                                                    <i class="bi bi-key-fill"></i>
                                                </div>
                                                <div>
                                                    <h5>Password</h5>
                                                    <input type="password" class="input" name="password" id="password"
                                                        required>
                                                    @error('password')
                                                        <div class="invalid-feedback pt-4">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-start mb-2 text-decoration-none pt-4"
                                                style="cursor: pointer">
                                                <input class="form-check-input me-2" type="checkbox" id="remember"
                                                    name="remember" checked style="cursor:pointer;" />
                                                <label class="form-check-label" for="remember" style="cursor:pointer">
                                                    Remember me
                                                </label>
                                            </div>

                                            <!-- Submit button -->
                                            <button type="submit" class="button"
                                                style="background-color: rgb(16,74,129); color:hsl(218, 81%, 95%)">
                                                Login
                                            </button>

                                            <div class="d-flex align-items-center justify-content-center pt-3">
                                                <p class="mb-0 me-1">Don't have an GimStore account?</p>
                                                <a href="/" class="text-dark text-decoration-none">Register
                                                    here</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
    <script src="js/form.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script> --}}
</body>

</html>
