@extends('admin.adminLayout')

@section('title', 'GimStore | ')

@section('content')

    <div class="container">
        <div class="row " style="justify-content: center">
            <div class="card mb-3 mt-5 p-3" style="max-width: 500px">

                <div class="text-center">
                    <img style="width: 500px; height: auto;" src="{{ asset('storage/'.$game->image) }}" class="img-fluid rounded "
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
                            <a href="/admin/home" class="btn btn-primary flex-fill pt-2" type="button"
                                style="height: 45px;">Back</a>
                        </div>

                        <div class="d-flex" style="">
                            <a href="/admin/game/{{ $game->id }}" class="btn btn-dark flex-fill pt-2 mt-3" type="button"
                                style="height: 45px;">Update Game</a>
                        </div>

                        <form action="/admin/delete/{{ $game->id }}" method="post"
                            enctype="multipart/form-data" class="w-100">
                            @csrf
                            @method('delete')
                            <div class="text-center my-2">
                                <button type="submit" class="btn btn-danger mt-auto w-100"
                                    onclick="return confirm('Are you sure delete this game ?')">Delete</button>

                            </div>
                        </form>

                        <div class="row mt-3">
                            <div class="col-sm-8">Developer <strong>{{ $game->developer }}</strong></div>

                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-sm-8">Publisher <strong>{{ $game->publisher }}</strong></div>

                        </div>
                        <hr>
                        @if ($game->price == 0)
                            <div class="row mt-3">
                                <div class="col-sm-8">Free</div>
                            </div>
                        @else
                            <div class="row mt-3">
                                <div class="col-sm-8">Rp. {{ number_format($game->price) }} </div>
                            </div>
                        @endif
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
