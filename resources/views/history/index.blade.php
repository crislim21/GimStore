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



    @if (session()->has('success'))
        <div class="alert alert-success d-flex justify-content-center w-100" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($history->count())
        @foreach ($history as $items)
            <div class="container rounded my-2 shadow-lg overflow-hidden" style="background-color: #ffff;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <h4 class="text-dark">Purchased : {{ $items->created_at->format('d/m/Y') }}
                                {{ $items->created_at }}</h4>
                            @php
                                $count = 0;
                            @endphp
                            @foreach ($items->historydetail as $item)
                                <ul style="list-style-type: none;">

                                    <li>
                                        <img src="{{ asset('/storage/' . $item->game_image) }}" alt=""
                                            style="width:300px; height:200px">

                                        {{ $item->game_title }} - <strong>Rp.
                                            {{ $item->game_price }}</strong>


                                    </li>
                                </ul>
                                @php
                                    $count += $item->game_price;
                                @endphp
                            @endforeach
                        </div>
                        <h4>Total Price : Rp. {{ $count }}</h4>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center fs-4 m-5">Sorry, you don't have any purchased games</p>

    @endif
</body>

</html>
