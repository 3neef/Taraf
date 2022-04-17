@extends('layouts.admin')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">
                add_shopping_cart
                </i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Product Requests</p>
              <h4 class="mb-0">{{ \App\Models\RequestedProduct::all()->count() }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">post_add</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Posts</p>
              <h4 class="mb-0">{{ \App\Models\Post::all()->count() }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">inventory_2</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Products</p>
              <h4 class="mb-0">{{ \App\Models\Product::all()->count() }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">category</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Categories</p>
              <h4 class="mb-0">{{ \App\Models\Category::all()->count() }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
        </div>
      </div>
    </div>
    </div>
@endsection
@section('scripts')
@parent

@endsection