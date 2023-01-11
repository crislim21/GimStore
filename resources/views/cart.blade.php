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

<body style="background-color: #141414; color: white;">
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
        <h1 style="margin-left: 250px; margin-top: 70px; margin-bottom: 25px" >My Chart</h1>
        <div class="container" style="margin-top: 10px">
            <div class="row ">
                <div class="col-md-8">
                    @foreach ($games as $item)
                        <div class="card mb-3 w-auto border-0" style="background-color: #272727; ">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4" style="padding: 20px 20px 20px 20px;">
                                    <img style="width: 300px; height: auto;" src="{{ $item->game_image }}" class=" img-fluid rounded" alt="...">
                                    @php
                                        $count = 0;
                                        $count += $item->game_price;
                                    @endphp
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title" style="margin-top: 10px;">{{ $item->game_title }}</h3>
                                        <p style="color: #a0a0a0; margin-top: 10px;" class="fw-bolder card-text fs-6">{{ $item->game_description }}</p>
                                        <h4>Rp. {{ number_format($item->game_price) }}</h4>
                                        <p class="text-end">
                                            <a style="color: #a0a0a0;" class="text-decoration-underline fs-6" href="">Remove</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="card w-auto border-0 bg-transparent">
                        <div class="card-body">
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($games as $item)
                                @php
                                    $total += $item->game_price;
                                @endphp
                            @endforeach
                            <h1>Games and Hardware Summary</h1>
                            <div class="row" style="padding-bottom: 50px;">
                                <div class="col-sm-8">price</div>
                                <div class="col-sm-4">Rp.{{ $total }}</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-8">Subtotal</div>
                                <div class="col-sm-4">Rp.{{ number_format($total) }}</div>
                            </div>
                            <div class="d-grid" style="margin-top: 10px;">
                                <a href="/history/make" class="btn btn-primary"  type="button" style="height: 50px;">CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
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
