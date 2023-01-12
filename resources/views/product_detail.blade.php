<!DOCTYPE html>
<html lang="en">

<head>
    <title>GimStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    @include('partials.navbar')
    <!-- Close Top Nav -->


    <div class="container">
        <div class="row " style="justify-content: center">
            <div class="card mb-3 mt-5 p-3" style="max-width: 500px">

                <div class="text-center">
                    <img style="width: 500px; height: auto;" src="{{ $game->image }}" class="img-fluid rounded "
                        alt="...">
                </div>
                <div class="card-body ">
                    <h5 class="card-title">{{ $game->title }}</h5>
                    <p class="card-text">
                        {{ $game->description }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card w-auto border-0 bg-transparent">
                    <div class="card-body">

                        <div class="d-flex" style="">
                            <a href="/browse" class="btn btn-danger flex-fill pt-2" type="button" style="height: 45px;">Back</a>
                        </div>
                        <div class="" style="margin-top: 10px;">
                            <form action="{{ route('cart.store', $game->id) }}" method="post"
                                enctype="multipart/form-data" class="d-flex">
                                @csrf
                                <button class="btn btn-primary flex-fill" type="submit" style="height: 50px;">Add to Cart</button>

                            </form>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-8">Developer <strong>{{ $game->developer }}</strong></div>

                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-sm-8">Publisher <strong>{{ $game->publisher }}</strong></div>

                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-sm-8">Rp. {{ number_format($game->price) }} </div>

                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    {{-- <script src="assets/js/bootstrap.bundle.min.js"></script> --}}
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- End Script -->

</body>

</html>
