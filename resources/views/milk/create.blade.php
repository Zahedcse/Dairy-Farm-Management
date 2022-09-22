@extends('admin.layouts.master')
@section('title')
Animal|Milk-Data-Create
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Add-Cow-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('milk.index')}}">Milk-Index</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header text-center bg-success fw-semibold">
                   <i class="fa fa-edit"></i> &nbsp; Collect Milk
                </div>
                <div class="card-body">
                    <form action="{{route('milk.store')}}" method="post" class="needs-validation">
                        @csrf
                        <div class="row mb-2">
                            <label for="Name" class="col-sm-3 col-form-label-sm fw-bold">Animal Id</label>
                            <div class="col-sm-9">
                                <select name="cow_id" id="" class="form-select input is-success is-small"
                                    aria-label="Default select example">
                                    @foreach ($cows as $cow)
                                    <option value="{{$cow->id}}" selected>{{$cow->name}}</option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="litre" class="col-sm-3 fw-bold col-form-label-sm">Litre</label>
                            <div class="col-sm-9">
                                <input type="number" name="litre_collected" id="litre"
                                    class="input is-success is-small" required min="0">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-3 fw-bold col-form-label-sm">Price (Per Litre)</label>
                            <div class="col-sm-9">
                                <input type="number" name="price_per_litre" id="price"
                                    class="input is-success is-small" required min='0'>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection