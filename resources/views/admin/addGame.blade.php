@extends('admin.adminLayout')

@section('title','Add new game')

@section('content')

<div class="container p-5 w-50 bg-transparent mt-5 border rounded">
    <h2 class="text-center m-3">Add new game</h2>
    <form>
        
        <div class="mb-3">
          <label class="form-label">Game title</label>
          <input type="text" class="form-control" placeholder="Input title">
        </div>
        <div class="mb-3">
          <label class="form-label">Game description</label>
          <textarea class="form-control" rows="5" placeholder="Description"></textarea>
        </div>
        <label class="form-label">Price</label>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp. </span>
            <input type="text" class="form-control" placeholder="100.000">
          </div>
        {{-- <div class="mb-3">
          <label class="form-label">Game platform</label>
          <input type="text" class="form-control" placeholder="Input game platform">
        </div> --}}
        <label class="form-label">Game platform</label>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Platform</label>
            <select class="form-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">PC</option>
              <option value="2">Playstation 3</option>
              <option value="3">Playstation 4</option>
              <option value="4">Playstation 5</option>
              <option value="5">Xbox Series X</option>
              <option value="6">Xbox Series S</option>
              <option value="7"></option>
            </select>
          </div>
        <div class="mb-3">
            <label class="form-label">Game Image</label>
            <input type="file" placeholder="image" class="form-control">
          </div>
        <button type="submit" class="btn btn-dark w-100 mt-5">Add game</button>
      </form>
    
</div>
@endsection