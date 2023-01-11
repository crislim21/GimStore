@extends('admin.adminLayout')

@section('title', 'Home')

@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Product Name" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
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
                            <div class="card h-100 ">
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
                                <div class="card-footer p-0 pt-0 border-top-0 bg-transparent mx-2">
                                    <div class=" d-flex flex-wrap justify-content-start">
                                        <form action="{{ route('cart.store', $game->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="text-center me-3">
                                                <button type="submit" class="btn btn-outline-dark mt-auto">View</button>

                                            </div>
                                        </form>

                                        <form action="{{ route('cart.store', $game->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="text-center ms-2">
                                                <button type="submit" class="btn btn-dark mt-auto">Update item</button>

                                            </div>
                                        </form>

                                        <form action="{{ route('cart.store', $game->id) }}" method="post"
                                            enctype="multipart/form-data" class="w-100">
                                            @csrf
                                            <div class="text-center my-2">
                                                <button type="submit" class="btn btn-danger mt-auto w-100">Delete</button>

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

@endsection
