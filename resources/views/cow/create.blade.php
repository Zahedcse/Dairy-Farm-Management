@extends('admin.layouts.master')
@section('title')
Create|Cow-Data
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
        <span><a href="{{route('cow.index')}}">Cow-List</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <form action="{{route('cow.store')}}" method="post" class="needs-validation">
                        @csrf
            <div class="card">
                <div class="card-header has-background-success fw-semibold">
                    <i class="fa fa-edit"></i> &nbsp; Add-Cow
                </div>
                <div class="card-body">
                        <div class="row mb-2">
                            <label for="Name" class="col-sm-3 col-form-label-sm fw-bold">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="Name" class="input is-success is-small"
                                    placeholder="Enter Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div id="gender" class="d-flex gender mb-3 mx-auto">
                            <div class="col-sm-3 col-form-label-sm fw-bold">
                                <label for="">Gender</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio1"
                                    value="Male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="inlineRadio2"
                                    value="Female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Type</label>
                            <div class="col-sm-9">
                                <select name="type" class="form-select input is-success is-small" id="type"
                                    aria-label="Default select example">
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3" id="next_preg_date">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Next-Pregnant-Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="next_preg_date" class="input is-success is-small"/>
                            </div>
                        </div>
                        <div class="row mb-3" id="Milk">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Milk-Per-Day</label>
                            <div class="col-sm-9">
                                <input type="text" name="milk_per_day" class="input is-success is-small"/>
                            </div>
                        </div>
                        <div class="row mb-3" id="preg_status">
                            <label for="" class="col-sm-3 fw-bold col-form-label-sm">Pregnant Status</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregnant_status" id="inlineRadio1"
                                        value="1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pregnant_status" id="inlineRadio2"
                                        value="0">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Breed" class="col-sm-3 fw-bold col-form-label-sm">Breed</label>
                            <div class="col-sm-9">
                                <select name="breed" class="form-select input is-success is-small" id="Breed"
                                    aria-label="Default select example">
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
                        </div>
                        <div class="row mb-3">
                            <label for="obtain" class="col-sm-3 fw-bold col-form-label-sm">How Obtained</label>
                            <div class="col-sm-9">
                                <select name="h_obtain" class="form-select input is-success is-small target" id="obtain"
                                    aria-label="Default select example">
                                    <option selected> --Select-one---</option>
                                    <option name="purchased" value="purchased">Purchased</option>
                                    <option name="born" value="born">Born</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Buying Price</label>
                                <div class="col-sm-9">
                                    <input type="number" name="buying_price" class="input is-success is-small"/>
                                </div>
                            </div>
                        <div class="row mb-3" id="dob">
                            <label for="" class="col-sm-3 col-form-label-sm fw-bold">Date of
                                Birth(Est)</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" class="input is-success is-small">
                            </div>
                        </div>
                        <div class="row mb-3" id="obdate">
                            <label for="Ob_date" class="col-sm-3 fw-bold col-form-label-sm">Obtaining Date</label>
                            <div class="col-sm-9">
                                <input type="date" name="ob_date" id="Ob_date" class="input is-success is-small">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                            <i class="fa fa-list"></i> &nbsp;Information
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row mb-3">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Height(INCH)</label>
                            <div class="col-sm-9">
                                <input type="text" name="height" class="input is-success is-small"/>
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="type" class="col-sm-3 fw-bold col-form-label-sm">Weight(KG)</label>
                            <div class="col-sm-9">
                                <input type="text" name="weight" class="input is-success is-small"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 fw-bold col-form-label-sm">Previous Vaccine</label>
                            <div class="col-sm-9">
                                <select name="prev_vaccine" class="form-select input is-success is-small target" id="prev_vac"
                                    aria-label="Default select example">
                                    <option selected> --Select-one---</option>
                                    <option name="Yes" value="Yes">Yes</option>
                                    <option name="No" value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" id="v_list">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                            <i class="fa fa-list"></i> &nbsp; Vaccine List
                        </div>
                    </div>
                    <div class="card-content">
                        <table class="table is-full-width is-narrow is-striped">
                            <thead>
                                <th>Vaccine Name</th>
                                <th>Dose</th>
                                <th>Repeat</th>
                            </thead>
                            <tbody>
                                    @foreach ($vaccines as $vaccine)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="vaccines[]" value="{{$vaccine->vname}}"/>
                                            <label>
                                                {{$vaccine->vname}} - ({{$vaccine->vdays}}Days)
                                            </label>
                                        </td>
                                        <td>
                                            <label>{{$vaccine->vdose}}
                                            </label>
                                        </td>
                                        <td>
                                            <label>{{$vaccine->vrepeat}}</label>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box shadow border">
                    <div class="form-group">
                        <button wire:click="update('bob')" class="button is-success is-small w-100"type="submit">Save Changes</button>
                        <div wire:loading wire:target="update('bob')">
                            Updating Bob...
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var maleTypes = ['Bull', 'weaner'];
    var femaleTypes = ['Heifer','Cow'];
    $('#Milk').hide();
    $('#next_preg_date').hide();
    $('#preg_status').hide();
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
                $('#Milk').hide();
                $('#next_preg_date').hide();
                $('#preg_status').hide();
            }
            else if (this.value == 'Female') {
                var options = '';
                options += '<option value="" selected>SELECT TYPE</option>';
                for(i=0;i<2; i++){ options +='<option value="' +femaleTypes[i]+'">'+femaleTypes[i]+'</option>';
                }
                $("#type").empty();
                $("#type").append(options);
                $('#Milk').show();
                $('#next_preg_date').show();
                $('#preg_status').show();
            }
        });
    });
</script>
{{-- Script for displaying How obtaiened value --}}
<script>
    $(function() {
       $('#v_list').hide();
        // $('#obdate').hide();
        // $('#accu').hide();
        $( "#prev_vac" ).change(function() {
            if(this.value == 'Yes'){
                $('#v_list').show();
                // $('#obdate').show();
                // $('#accu').hide();
            }else{
                $('#v_list').hide();
                // $('#obdate').hide();
                // $('#accu').hide();
            }
        });
    });
</script>
<script>
    $(function() {
       $('#dob').hide();
        $('#obdate').hide();
        // $('#accu').hide();
        $( "#obtain" ).change(function() {
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