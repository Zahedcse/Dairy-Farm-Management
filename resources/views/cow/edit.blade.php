@extends('admin.layouts.master')
@section('title')
Edit|Cow-Details
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Update-Cow-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('cow.index')}}">Cow-List</a></span>
    </li>
</ol>
@endsection
@section('content')

    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header text-center bg-success fw-semibold">
                    Update-Cow
                </div>
                <div class="card-body">
                    <form action="{{route('cow.update',$cow->id)}}" method="post" class="needs-validation">
                        @csrf
                        @method('PUT')
                        <div class="row mb-2">
                            <label for="Name" class="col-sm-3 col-form-label-sm fw-bold">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="Name" class="input is-success is-small"
                                    value="{{old('name',$cow->name)}}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gender mb-3 mx-auto">
                            <div class="col-sm-3 col-form-label-sm fw-bold">
                                <label for="">Gender</label>
                            </div>
                            {{-- value=1 for male --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio1"
                                    value="Male"  {{$cow->gender == 'Male' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio2"
                                    value="Female" {{$cow->gender == 'Female' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Type</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-select input is-success is-small" id="type"
                                    aria-label="Default select example">
                                    <option value="{{$cow->type}}">{{$cow->type}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Breed" class="col-sm-3 fw-bold col-form-label-sm">Breed</label>
                            <div class="col-sm-9">
                                <select name="breed" class="form-select input is-success is-small" id="Breed"
                                    aria-label="Default select example">
                                    <option value="{{$cow->breed}}" selected>{{$cow->breed}}</option>
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
                        </div>
                        <div class="row mb-3">
                            <label for="obtain" class="col-sm-3 fw-bold col-form-label-sm">How Obtained</label>
                            <div class="col-sm-9">
                                <select name="h_obtain" class="form-select input is-success is-small target" id="obtain"
                                    aria-label="Default select example">
                                    <option value="{{$cow->h_obtain}}" selected>{{$cow->h_obtain}}</option>
                                    <option value="purchased">purchased</option>
                                    <option value="born">Borned</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3" id="dob">
                            <label for="" class="col-sm-3 col-form-label-sm fw-bold">Date of
                                Birth(Est)</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" class="input is-success is-small"
                                    value="{{$cow->dob}}">
                            </div>
                        </div>
                        <div class="row mb-3" id="obdate">
                            <label for="Ob_date" class="col-sm-3 fw-bold col-form-label-sm">Obtaining Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="ob_date" id="Ob_date" class="input is-success is-small"
                                    value="{{$cow->ob_date}}">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Update" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    var maleTypes = ['Weaner', 'Bull'];
    var femaleTypes = ['Heifer', 'Cow'];
    $(document).ready(function(){
        $('.gender').change(function() {
            if (this.value == 'Male') {
                var options = '';
                options += '<option value="" selected>SELECT TYPE</option>';
                for(i=0;i<2; i++){
                    options += '<option value="'+maleTypes[i]+'">'+maleTypes[i]+'</option>'; 
                }
                $("#type").empty();
                $("#type").append(options);
            }
            else if (this.value == 'Female') {
                var options = '';
                options += '<option value="" selected>SELECT TYPE</option>';
                for(i=0;i<2; i++){ options +='<option value="' +femaleTypes[i]+'">'+femaleTypes[i]+'</option>';
                }
                $("#type").empty();
                $("#type").append(options);
            }
        });
    });
</script>
{{-- Script for displaying How obtaiened value --}}
<script>
    $(function() {
       $('#dob').hide();
        $('#obdate').hide();
        // $('#accu').hide();
        $( "#obtain").change(function() {
            if(this.value == 'purchased'){
                $('#dob').show();
                $('#obdate').show();
                // $('#accu').hide();
            }else if(this.value == 'born'){
                // $('#accu').show();
                $('#dob').show();
                $('#obdate').hide();
            }
            else{
                $('#dob').hide();
                $('#obdate').hide();
                // $('#accu').hide();
            }
        });
    });
</script>
<script>
    (() => {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
    
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
    event.preventDefault()
    event.stopPropagation()
    }
    
    form.classList.add('was-validated')
    }, false)
    })
    })()
</script>
@endsection