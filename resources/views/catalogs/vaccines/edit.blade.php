@extends('admin.layouts.master')
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Update-vaccine-Information</span>
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
                    <a class="button is-primary is-disabled is-small" id=""href="#"><i class="fa fa-add"></i></a> &nbsp; Update-Vaccine
                </div>
                <div class="card-content">
                    <form action="{{route('vaccines.update',$vaccine->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="field-group mb-3">
                            <label for="">Vaccine Name</label>
                            <div class="control">
                                <input type="text" name="vname" class="input is-success is-small" value="{{old('vname',$vaccine->vname)}}">
                            </div>
                        </div>
                        <div class="field-group mb-3">
                            <label for="">Period (Days)</label>
                            <div class="control">
                                <input type="number" min="1" name="vdays" class="input is-success is-small" id=""value="{{$vaccine->vdays}}">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Repeat Vaccine</label>
                            <select name="vrepeat" class="form-select input is-success is-small" id="">
                                <option selected value="{{$vaccine->vrepeat}}">{{$vaccine->vrepeat}}</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="field mb-3">
                            <label for="">Dose</label>
                            <div class="control">
                                <input type="text" name="vdose" class="input is-success is-small" value="{{$vaccine->vdose}}" id="">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Note">Note</label>
                            <textarea name="note" class="textarea is-success is-small" id="Note">{{$vaccine->note}}</textarea>
                        </div>
                        <button type="submit" class="button is-success is-small w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
