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

    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            <form action="/library">
                <div class="input-group mb-3" style="height:60px;">
                    <input type="text" class="form-control" placeholder="Search Game" name="search"
                        value={{ request('search') }}>
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($games->count())
        <!-- Start Categories of The Month -->
        <section class="container py-5" style="background-color: ">
            <section class="py-5">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                        @foreach ($games as $game)
                            <div class="col-4 mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top img-fluid" src="{{ asset('/storage/' . $game->game_image) }}"
                                        style="height:200px;" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $game->game_title }}</h5>
                                            <!-- Product price-->
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer pt-0 border-top-0 bg-transparent">
                                        <div class=" d-flex justify-content-around">

                                            <div class="text-center">
                                                <a href="/library/{{ $game->id }}"
                                                    class="btn btn-outline-dark mt-auto">
                                                    View
                                                </a>
                                            </div>
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
    @else
        <p class="text-center fs-4 m-5">Sorry, you dont have any games in your library</p>
    @endif
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
