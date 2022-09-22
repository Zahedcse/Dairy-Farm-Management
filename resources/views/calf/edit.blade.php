@extends('admin.layouts.master')
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Update-Calf-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('calf.index')}}">Calf-List</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-header has-background-success fw-semibold">
                    Update-Calf
                </div>
                <div class="card-body">
                    <form action="{{route('calf.update',$calf->id)}}" method="post" class="needs-validation">
                        @csrf
                        @method('PUT')
                        <div class="row mb-2">
                            <label for="Name" class="col-sm-3 col-form-label-sm fw-bold">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="cname" id="" class="input is-primary is-small rounded" value="{{$calf->cname}}">
                            </div>
                        </div>
                        <div class="d-flex gender mb-3 mx-auto">
                            <div class="col-sm-3 col-form-label-sm fw-bold">
                                <label for="">Gender</label>
                            </div>
                            {{-- value=1 for male --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio1"
                                    value="Male"  {{$calf->gender == 'Male' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio2"
                                    value="Female" {{$calf->gender == 'Female' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Type</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-select form-select-sm" id="type"
                                    aria-label="Default select example">
                                    <option value="{{$calf->type}}">{{$calf->type}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Breed" class="col-sm-3 fw-bold col-form-label-sm">Breed</label>
                            <div class="col-sm-9">
                                <select name="breed" class="form-select form-select-sm" id="Breed"
                                    aria-label="Default select example">
                                    <option selected> {{$calf->breed}}</option>
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
                                <select name="h_obtain" class="form-select form-select-sm target" id="obtain"
                                    aria-label="Default select example">
                                    <option selected value="{{$calf->h_obtain}}">{{$calf->h_obtain}}</option>
                                    <option name="purchased" value="purchased">Purchased</option>
                                    <option name="born" value="born">Born</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2" id="mother">
                            <label for="Name" class="col-sm-3 col-form-label-sm fw-bold">Mother</label>
                            <div class="col-sm-9">
                                <select name="cow_id" id="" class="form-select form-select-sm">
                                    @foreach ($cows as $cow )
                                        <option value="{{$cow->id}}">{{$cow->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3" id="dob">
                            <label for="" class="col-sm-3 col-form-label-sm fw-bold">Date of
                                Birth(Est)</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" class="form-control form-control-sm" value="{{$calf->dob}}">
                            </div>
                        </div>
                        <div class="row mb-3" id="accu">
                            <label for="" class="col-sm-3 col-form-label-sm fw-bold">Date of
                                Birth</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" class="form-control form-control-sm" value="{{$calf->dob}}">
                            </div>
                        </div>
                        <div class="row mb-3" id="obdate">
                            <label for="Ob_date" class="col-sm-3 fw-bold col-form-label-sm">Obtaining Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="ob_date" id="Ob_date" class="form-control form-control-sm" value="{{$calf->ob_date}}">
                            </div>
                        </div>
                        <div class="d-flex mb-3 mx-auto">
                            <div class="col-sm-3 col-form-label-sm fw-bold">
                                <label for="">Status</label>
                            </div>
                            {{-- value=1 for male --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineCheck1"
                                    value="1"  {{$calf->status == '1' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineCheck1">Available</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="inlineCheck2"
                                    value="0" {{$calf->status == '0' ? 'checked' :''}}>
                                <label class="form-check-label" for="inlineCheck2">Sold</label>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Submit" class="button is-success is-small">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var maleTypes = ['Bull', 'weaner'];
    var femaleTypes = ['Heifer','Cow'];
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
        $('#accu').hide();
        $('#mother').hide();
        // $('#accu').hide();
        $( "#obtain" ).change(function() {
            if(this.value == 'purchased'){
                $('#dob').show();
                $('#obdate').show();
                $('#accu').hide();
                $('#mother').hide();
            }else if(this.value == 'born'){
                $('#accu').show();
                $('#dob').hide();
                $('#obdate').hide();
                $('#mother').show();
            }
            else{
                $('#dob').hide();
                $('#obdate').hide();
                $('#accu').hide();
                $('#mother').hide();
            }
        });
    });
</script>

@endsection