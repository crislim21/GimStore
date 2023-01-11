<!DOCTYPE html>
<html lang="en">

<head>
    <title>GimStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

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

    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            <form action="/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Product Name" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Categories of The Month -->
    <section class="container py-5" style="background-color: ">
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($games as $game)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top img-fluid" src="{{ $game->image }}" style="height:170px;"
                                    alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $game->title }}</h5>
                                        <!-- Product price-->
                                        @if ($game->price == 0)
                                            Free
                                        @else
                                            Rp. {{ number_format($game->price) }}
                                        @endif
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class=" d-flex justify-content-around">
                                        <form action="{{ route('cart.store', $game->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-outline-dark mt-auto">View</button>

                                            </div>
                                        </form>

                                        <form action="{{ route('cart.store', $game->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-outline-dark mt-auto">Add to Cart</button>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center mt-4">
            {{ $games->links() }}
        </div>
    </section>
    <!-- End Game of The Month -->


    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>
