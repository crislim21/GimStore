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



    <!-- Start Categories of The Month -->
    @if (session()->has('success'))
        <div class="alert alert-success d-flex justify-content-center w-100" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($games->count())
        @foreach ($games as $item)
            <div class="container border rounded my-2 shadow overflow-hidden" style="background-color: #ffff;">
                <div class="container p-1">
                    <div class="row p-3">
                        <div class="col-lg-3">
                            <img src="{{ $item->game_image }}" class="img-fluid" style="width:300px"alt="">
                            @php
                                $count = 0;
                                $count += $item->game_price;
                            @endphp
                        </div>

                        <div class="col-lg-9">
                            <div class="container">
                                <p>{{ $item->game_title }}</p>
                                <p>{{ $item->game_description }}</p>
                                <p>Rp. {{ number_format($item->game_price) }}</p>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-sm-2 ms-auto my-3">
                @php
                    $total = 0;
                @endphp
                @foreach ($games as $item)
                    @php
                        $total += $item->game_price;
                    @endphp
                @endforeach

                <a class="text-decoration-none text-dark">Total Price: Rp.{{ $total }}</a>
                <a href="/history/make" class="text-decoration-none btn btn-primary">Check Out</a>
            </div>
        </div>

    @else
        <p class="text-center fs-4">No Cart Listed</p>
    @endif
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
