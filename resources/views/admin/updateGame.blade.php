@extends('admin.adminLayout')

@section('title', 'Update Game')

@section('content')


    <div class="container p-5 shadow-lg w-50 mt-5">
        <div class="text-center mb-4">
            <p>Current Image</p>
            <img src="{{ asset('storage/' . $game->image) }}" class="img-fluid rounded " alt="..."
                style="width:500px; height:350px">
        </div>

        <form class="mt-3" action="/admin/update/game/{{ $game->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label" for="title">Game title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Input title"
                    value="{{ $game->title }}" required name="title" id="title">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label class="form-label" for="description">Game description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Description"
                    required name="description" id="description">{{ $game->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <label class="form-label" for="price">Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp. </span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="100.000"
                    value="{{ $game->price }}" required name="price" id="price" min=0>
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="publisher">Game publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror"
                    placeholder="Input title" value="{{ $game->publisher }}" required name="publisher" id="publisher">
                @error('publisher')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="developer">Game developer</label>
                <input type="text" class="form-control @error('developer') is-invalid @enderror"
                    placeholder="Input title" value="{{ $game->developer }}" required name="developer" id="developer">
                @error('developer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">New Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="image"
                    name="image" id="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>




            <button type="submit" class="btn btn-dark w-100 mt-5">Update</button>
        </form>
    </div>

@endsection
