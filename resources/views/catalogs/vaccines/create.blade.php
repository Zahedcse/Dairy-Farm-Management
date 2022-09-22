@extends('admin.layouts.master')
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span> 
    </li>
    <li class="breadcrumb-item">
        <span>Add-vaccine-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('vaccines.index')}}">Vaccine-Details</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="column is-7 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <a class="button is-primary is-disabled is-small" id=""href="#"><i class="fa fa-add"></i></a> &nbsp; Create-Vaccine
                </div>
                <div class="card-content">
                    <form action="{{ route('vaccines.store')}}" method="post">
                        @csrf
                        <div class="field-group mb-3">
                            <label for="">Vaccine Name</label>
                            <div class="control">
                                <input type="text" name="vname" class="input is-success is-small" id="">
                            </div>
                        </div>
                        <div class="field-group mb-3">
                            <label for="">Period (Days)</label>
                            <div class="control">
                                <input type="number" min="1" name="vdays" class="input is-success is-small" id="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Repeat Vaccine</label>
                            <select name="vrepeat" class="form-select input is-success is-small" id="">
                                <option selected>Select--One</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="field mb-3">
                            <label for="">Dose</label>
                            <div class="control">
                                <input type="text" name="vdose" class="input is-success is-small" id="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Note">Note</label>
                            <textarea name="note" class="textarea is-success is-small" id="Note"></textarea>
                        </div>
                        <button type="submit" class="button is-success is-small w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
