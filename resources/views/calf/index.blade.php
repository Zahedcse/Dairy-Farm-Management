@extends('admin.layouts.master')
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Calves-Information</span>   
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('calf.create')}}">Add-Calf</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @if (session()->has('delete'))
            <article class="message is-danger animate__animated animate__bounceIn">
              <div class="message-header">
                <p>{{session()->get('delete')}}</p>
                <button class="delete" aria-label="close"></button>
              </div>
            </article>
            @endif
            @if (session()->has('msg'))
            <article class="message is-success animate__animated animate__bounceIn">
              <div class="message-header">
                <p>{{session()->get('msg')}}</p>
                <button class="delete" aria-label="close"></button>
              </div>
            </article>
            @endif
            <h1 class="text-center ">Data Table</h1>
            <table id="table" class="table is-striped" style="width:100%">
                <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Breed</th>
                    <th>How Obtain</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th>Mother</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($calves as $calf)
                    <tr>
                        <td>{{$calf->cname}}</td>
                        <td>{{$calf->gender}}</td>
                        <td>{{$calf->type}}</td>
                        <td>{{$calf->breed}}</td>
                        <td>{{$calf->h_obtain}}</td>
                        <td>{{$calf->dob}}</td>
                        <td>{{$calf->status ? 'Available' : 'Sold'}}</td>
                        <td>{{$calf->name}}</td>
                        <td>
                            <a class="button is-primary is-small" href="{{route('calf.edit', $calf->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            
                            <button type="submit" class="button is-danger is-small js-modal-trigger" data-target="modal-js-example">
                                  <i class="fa fa-trash"></i>
                            </button>
                                    <!-- Modal; --->
                                <div id="modal-js-example" class="modal animate__animated animate__bounceIn">
                                    <div class="modal-background">
                                    </div>
                                    <div class="modal-content">
                                        <div class="box">
                                          <header class="modal-card-head">
                                            <p class="modal-card-title">Are You sure you want to Delete?</p>
                                            <button class="delete" aria-label="close"></button>
                                          </header>
                                          <br>
                                          <form action="{{ route('calf.destroy',$calf->id) }}" method="post" class="">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="button is-danger is-small is-pulled-right">Delete</button>
                                          </form>
                                        </div>
                                    </div>
                            </div>
                        </td>
                        {{-- <td>
                            {{ QrCode::generate(
                            'Name'.'='. $cow['name'].''.
                            'Gender'.'='. $cow['gender'].''.
                            'Type'.'='. $cow['type']
                            )}}
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // $(document).ready(function() {
    //     $('#table').DataTable(
    //         {
    //             dom: 'Bfrtip',
    //             buttons: [
    //             'csv', 'excel', 'pdf', 'print',
    //             ]
    //         }
    //     );
    // } );
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .message, .message-header, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
</script>
<script>
  $(".message .delete").click(function(){$(this).closest('.message').hide();});
</script>

@endsection
