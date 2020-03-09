@extends('layouts/app')

@section('content')

<div class="container">
    <h1>新增產品類型</h1>
    <form method="POST" action="/home/productType/store" enctype="multipart/form-data">
    @csrf



    <div class="form-group">
      <label for="Types">Types</label>
      <input type="text" class="form-control" id="Types" name="Types" required>
    </div>
    <div class="form-group">
      <label for="Sort">Sort</label>
      <input type="text" class="form-control" id="Sort" name="Sort" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
