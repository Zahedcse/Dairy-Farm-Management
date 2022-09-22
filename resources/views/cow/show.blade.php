@extends('admin.layouts.master')
@section('title')
Show|Cow-Details
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Cow-Information-></span>
    </li>
    <li class="breadcrumb-item active">
        <span>{{$cow->id}}</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('cow.index')}}">Cow-List</a></span>
    </li>

</ol>
@endsection
@section('content')
<div class="col-sm-8 mx-auto">
    <div class="card col-sm-12 mb-3">
        <div class="card-header bg-success">
            <h3 class="text-center">Details of Cattle</h3>
        </div>
        <div class="card-body col-sm-10">
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Name:</label>
                <span>{{ $cow->name }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Gender:</label>
                <span >{{ $cow->gender }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Type:</label>
                <span>{{ $cow->type }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Breed:</label>
                <span>{{ $cow->breed }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Pregnant Status:</label>
                <span class="has-background-danger-dark rounded px-1 has-text-white">{{ ($cow->pregnant_status == 1 && $cow->gender == 'Female' ?'Pregnant':'Not Applicable for Male Cow')}}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Next Pregnant Date:</label>
                <span class="col-sm-6">{{$cow->next_preg_date == null && $cow->gender == 'Male' ? 'Not Applicable for Male Cow' :$cow->next_preg_date}}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">How Obtained:</label>
                <span class="col-sm-6">{{ $cow->h_obtain }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Buying Price:</label>
                <span class="col-sm-6">Tk. {{ $cow->buying_price }} BDT</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Height:</label>
                <span class="col-sm-6">{{ $cow->height}} INCH</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Weight:</label>
                <span class="col-sm-6">{{ $cow->weight}} KG</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Obtaining Date:</label>
                <span class="col-sm-6">{{ $cow->ob_date ? $cow->ob_date : 'Not Applicable for Borned Cattle' }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Date of Birth:</label>
                <span class="col-sm-6">{{ $cow->dob }}</span>
            </div>
            <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Age:</label>
                <span class="col-sm-6">{{ $cow->age }}</span>
            </div>
            {{-- <div class="col-sm-10 mx-auto mb-3 input">
                <label class="col-sm-6 fw-bold">Vaccine Details:</label>
                @foreach ($cow->vaccines as $vaccine )
                    <span>{{$Vaccine}}</span>
                @endforeach
            </div> --}}
            <div class="col-sm-10 mx-auto mb-3">
                <label class="col-sm-6 fw-bold">QR:</label>
                <span class="col-sm-6">
                     {{ QrCode::generate(
                    'Name'.'='. $cow['name']."\n".
                    'Gender'.'='. $cow['gender']."\n".
                    'Type'.'='. $cow['type']."\n".
                    'How Obtained'.'='. $cow['h_obtain']."\n".
                    'Obtaining Date'.'='. $cow['ob_date'?'ob_date':'Not Applicable For Borned cattle']."\n".
                    'Date of Birth'.'='. $cow['dob']."\n".
                    'Age'.'='. $cow['age']."\n"
                    )}}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection