@extends('admin.layouts.master')
@section('title')
Cow-Details
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Cow-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('cow.create')}}">Add-Cow</a></span>
    </li>
</ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="is-size-3 has-text-centered">Data-Table</h1>
            <table class="table is-full-width is-narrow" id="table">
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Breed</th>
                    <th>How Obtained</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($cows as $cow)
                    <tr>
                        <td>{{$cow->name}}</td>
                        <td>{{$cow->gender}}</td>
                        <td>{{$cow->type}}</td>
                        <td>{{$cow->breed}}</td>
                        <td>{{$cow->h_obtain}}</td>
                        <td>{{$cow->dob}}</td>
                        <td>{{$cow->age}}</td>
                        <td>
                            <a class="button is-primary is-small" href="{{route('cow.edit', $cow->id)}}"><i class="fa fa-edit"></i></a>
                            <a class="button is-info is-small" href="{{route('cow.show',$cow->id)}}"><i class="fa fa-eye"></i></a>
                            <button type="button" class="button is-danger is-small js-modal-trigger" data-target="modal-js-example">
                                  <i class="fa fa-trash"></i>
                            </button>
                            <x-modal-forms-del>
                                <form class="d-inline" action="{{route('cow.destroy',$cow->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger is-small is-pulled-right">Delete</button>
                                </form>
                            </x-modal-forms-del>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
<script>

  @if(session()->has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif

  @if(session()->has('del'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('del') }}");
  @endif

  @if(session()->has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(session()->has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
@endsection