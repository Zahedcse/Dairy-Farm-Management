@extends('admin.layouts.master')
@section('title')
Create|Animal-Pregnancy
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Add-Pregnancy-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('pregnancy.index')}}">Pregnancy-Details</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="column is-10 mx-auto">
            <form action="{{route('pregnancy.store')}}" method="post">
                @csrf
                <div class="card mb-3">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                           <i class="fa fa-info-circle"></i> &nbsp; Animal Details
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label for="">Animal Name:</label>
                            <select name="name" class="form-select input is-success is-small" aria-label="Default select example" id="">
                                @foreach ($cows as $cow)
                                    <option value="{{ $cow->name}}">{{ $cow->name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                            <i class="fa fa-list"></i> &nbsp; Animal-Pregnancy-Details
                        </div>
                    </div>
                <div class="card-content">
                    <div class="row">
                        <div class="column is-6">
                            <div class="form-group">
                                    <label for="">Pregnancy Type:</label>
                                    <select name="pregnancy_type" id="" class="form-select input is-success is-small">
                                        <option value="" selected>Select--One</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="">Semen Push Date</label>
                                    <input type="date" name="push_date" class="form-control input is-success is-small" id="">
                            </div>
                            <div class="field control">
                                    <label for="">Semen Cost</label>
                                    <input type="number" name="semen_cost" class="input is-success is-small" id="">
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="form-group">
                                <label for="Type">Semen Type:</label>
                                <select name="semen_type" id="Type" class="form-select input is-success is-small">
                                    <option selected> --Select-one---</option>
                                    <option value="native">Native</option>
                                    <option value="sahiwal">Sahiwal</option>
                                    <option value="sindhi">Sindhi</option>
                                    <option value="holstein-freistein">Holstein-Friesian</option>
                                    <option value="jersey">Jersey</option>
                                    <option value="brahman">Brahman</option>
                                    <option value="red-chittagong-cattle">Red Chittagong Cattle</option>
                                    <option value="pabna-cattle">Pabna Cattle</option>
                                    <option value="mirkadim-cattle">Mirkadim Cattle</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pregnancy Start Date</label>
                                <input type="date" name="start_date" class="form-control input is-success is-small" id="">
                            </div>
                            <div class="field control">
                                <label for="">Other Cost</label>
                                <input type="number" name="other_cost" class="input is-success is-small" id="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Note</label>
                            <textarea name="note" class="textarea is-success is-small"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button is-success w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
