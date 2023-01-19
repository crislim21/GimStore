@extends('admin.adminLayout')

@section('title', 'Add new game')

@section('content')

    <div class="container p-5 w-50 bg-transparent mt-5 shadow-lg rounded">
        <h2 class="text-center m-3">Add new game</h2>
        <form method="post" action="/admin/game" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="title">Game title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Input title"
                    required autofocus id="title" name="title" value={{ old('title') }}>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        title must be 5-70 characters long.
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="description">Game description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Description"
                    required name="description" id="description" value={{ old('description') }}></textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        description must be 25-1000 characters long.
                    </span>
                </div>
            </div>

            <label class="form-label">Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text" for="price">Rp. </span>
                <input type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Game Price" min=0
                    required name="price" id="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                    </span>
                </div>

            </div>
            <small class="mb-4">Price minimum Rp. 0</small>
            <br>
            {{-- <div class="mb-3">
          <label class="form-label">Game platform</label>
          <input type="text" class="form-control" placeholder="Input game platform">
        </div> --}}
            {{-- <label class="form-label">Game platform</label>
            <div class="input-group mb-3">
                <label class="input-group-text" for="platform">Platform</label>
                <select class="form-select" id="platform" name="platform">
                    <option selected>Choose...</option>
                    <option value="1">PC</option>
                    <option value="2">Playstation 3</option>
                    <option value="3">Playstation 4</option>
                    <option value="4">Playstation 5</option>
                    <option value="5">Xbox Series X</option>
                    <option value="6">Xbox Series S</option>
                    <option value="7">Nitendo Switch</option>
                </select>
            </div> --}}

            <div class="mb-3">
                <label class="form-label" for="publisher">Game publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" placeholder="Input Game Publisher"
                    required autofocus id="publsiher" name="publisher" value={{ old('publisher') }}>
                @error('publisher')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        publsiher must be 5-20 characters long.
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="developer">Game developer</label>
                <input type="text" class="form-control @error('developer') is-invalid @enderror" placeholder="Input Game Developer"
                    required autofocus id="developer" name="developer" value={{ old('developer') }}>
                @error('developer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        developer must be 5-20 characters long.
                    </span>
                </div>
            </div>



            <div class="mb-3">
                <label class="form-label">Game Image</label>
                <input type="file" placeholder="image" class="form-control @error('image') is-invalid @enderror" required
                    name="image" id="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        image cannot more than 2mb.
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100 mt-5">Add game</button>
        </form>

    </div>
@endsection
