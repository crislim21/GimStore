<!DOCTYPE html>
<html lang="en">

<head>
    <title>GimStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    @include('partials.navbar')
    <!-- Close Top Nav -->

    <div class="container py-2 h-100 vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col-xl-12 ">
                <div class="card rounded-3  bg-dark text-light ">
                    <div class="row g-0 ">
                        <div class="col-lg-12 ">
                            <div class="card-body p-md-5 mx-md-5 ">


                                <div class="align-items-center">
                                    <form action="/profile/update-profile" method="post">
                                        @method('put')
                                        @csrf
                                        <h3 class="mb-5">Edit Profile</h3>

                                        <div class="form-outline mb-4 textbox">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username"
                                                class="form-control @error('username')is-invalid @enderror"
                                                placeholder="(5-20 letters)" name="username" required
                                                value="{{ old('username', Auth::user()->username) }}" />

                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4 textbox">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email"
                                                class="form-control @error('email')is-invalid @enderror" placeholder=""
                                                name="email" required
                                                value="{{ old('email', Auth::user()->email) }}" />

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>


                                        <div class="form-outline mb-4 textbox">
                                            <label class="form-label" for="phonenumber">Phone Number</label>
                                            <input type="text" id="phonenumber"
                                                class="form-control @error('phonenumber')is-invalid @enderror"
                                                placeholder="(10-13 numbers)" name="phonenumber" required
                                                value="{{ old('phonenumber', Auth::user()->phonenumber) }}" />

                                            @error('phonenumber')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>

                                        <div class="pt-1 mb-4 pb-1">
                                            <button class="btn btn-primary  mb-3 form-control bt" type="submit">Save
                                                Update</button>
                                        </div>
                                    </form>
                                </div>
                                <a href="/profile">
                                    <button class="btn btn-primary  text-light">
                                        Back
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
