@extends('admin.layouts.master')
@section('title')
Animal-Pregnancy-Details
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
            <a href="{{route('pregnancy.create')}}">Add-Pregnancy Information</a>
        </span>
    </li>
</ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="is-size-3 has-text-centered">Data Table</h1>
            <table class="table is-striped is-narrow is-full-width"
                id="table">
                <thead>
                    <th>Animal Name</th>
                    <th>Pregnancy Type</th>
                    <th>Semen Type</th>
                    <th>Push Date</th>
                    <th>pregnancy Start</th>
                    <th>Ex. Delivery Date</th>
                    <th>Total</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->pregnancy_type}}</td>
                        <td>{{$d->semen_type}}</td>
                        <td>{{$d->push_date}}</td>
                        <td>{{$d->start_date}}</td>
                        <td><label for="" class="has-background-success rounded py-1 text-white">{{$d->del_date}}</label></td>
                        <td>{{$d->total}}</td>
                        <td>
                            <a class="button is-primary is-small" href="{{route('pregnancy.edit', $d->id)}}">
                              <i class="fa fa-edit">
                              </i>
                            </a>
                                <button type="submit" class="button is-danger is-small js-modal-trigger" data-target="modal-js-example">
                                  <i class="fa fa-trash"></i>
                                </button>
                                <x-modal-forms-del>
                                          <form class="d-inline" action="{{ route('pregnancy.destroy',$d->id) }}" method="post" class="">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="button is-danger is-small is-pulled-right">Delete</button>
                                          </form>
                                       </x-modal-forms-del>
                            </div>
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
