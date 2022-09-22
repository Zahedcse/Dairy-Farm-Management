@extends('admin.layouts.master')
@section('title')
Animal|Vaccine-Data
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Pregnancy-Information</span>   
    </li>
    <li class="breadcrumb-item active">
        <span>
            <a href="{{route('vaccine.create')}}">Add-Vaccine-Information</a>
        </span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Data Table</h1>
            <table class="table is-striped w-100"
                id="table">
                <thead>
                    <th>Animal Name</th>
                    <th>Vaccine Push Date</th>
                    <th>Time</th>
                    <th>Note</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    {{-- @foreach ($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->pregnancy_type}}</td>
                        <td>{{$d->semen_type}}</td>
                        <td>{{$d->push_date}}</td>
                        <td>{{$d->start_date}}</td>
                        <td>{{$d->del_date}}</td>
                        <td>{{$d->total}}</td>
                        <td>
                            <a class="button is-primary is-small" href="{{route('pregnancy.edit', $d->id)}}">
                              <i class="fa fa-edit">
                              </i>
                            </a>
                                <button type="submit" class="button is-danger is-small js-modal-trigger" data-target="modal-js-example">
                                  <i class="fa fa-trash"></i>
                                </button>
                                    <!-- Modal; --->
                                <div id="modal-js-example" class="modal is-centered">
                                    <div class="modal-background">
                                    </div>
                                    <div class="modal-content">
                                        <div class="box">
                                          <header class="modal-card-head">
                                            <p class="modal-card-title">Are You sure you want to Delete?</p>
                                            <button class="delete" aria-label="close"></button>
                                          </header>
                                          <br>
                                          <form class="d-inline" action="{{ route('pregnancy.destroy',$d->id) }}" method="post" class="">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="button is-danger is-small is-pulled-right">Delete</button>
                                          </form>
                                        </div>
                                    </div>
                            </div>
                        </td> 
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // $(document).ready(function() {
    //     $('#table').DataTable();
    // } );
</script>

<script>
  $(".message .delete").click(function(){$(this).closest('.message').hide();});
</script>
<script>
  @if(session()->has('msg'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('msg') }}");
  @endif

  @if(session()->has('del'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('del') }}");
  @endif

  @if(Session::has('info'))
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
