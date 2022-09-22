@extends('admin.layouts.master')
@section('title')
Animal|Vaccine-Data-Create
@endsection
@section('breadcrumb')
<ol class="breadcrumb my-0 ms-2">
    <li class="breadcrumb-item">
        <span>Dashboard</span>
    </li>
    <li class="breadcrumb-item">
        <span>Add-vaccine-Information</span>
    </li>
    <li class="breadcrumb-item active">
        <span><a href="{{route('vaccine.index')}}">Vaccine-Details</a></span>
    </li>
</ol>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="column is-11 mx-auto">
            <form action="{{route('vaccine.store')}}" method="post">
                @csrf
                <div class="card mb-3">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                           <i class="fa fa-info-circle"></i> 
                           &nbsp; Animal Details
                        </div>
                    </div>
                    <div class="card-content">
                        <livewire:cowdetails/>
                        <!-- Details of the specific Cow -->
                        
                    <!-- Details of the cow ends here -->
                        <div class="dropdown-divider"></div>
                    <!-- Cow Vaccination Auto Calculate-->
                        <div class="card" id="card-vaccine">
                            <h1 class="is-size-3 has-text-centered has-text-danger-dark">Pending Vaccine List</h1>
                            <div class="card-content">
                                <table class="table is-full-width is-narrow is-striped">
                                    <thead>
                                        <th>Vaccine Name</th>
                                        <th>Time(Days)</th>
                                        <th>Repeat</th>
                                        <th>Dose</th>
                                        <th>Note</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label for="">Anthrax</label></td>
                                            <td>120</td>
                                            <td><i class="fa fa-check"></i></td>
                                            <td>Annually in Endemic Areas</td>
                                            <td>4 months And Above</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- Cow Vaccination Auto Calculate Ends here-->
                    <!-- Details of the cow ends here -->
                        <div class="dropdown-divider"></div>
                    <!-- Cow Vaccination Auto Calculate-->
                        <div class="card" id="card-3">
                            <h1 class="is-size-3 has-text-centered has-text-primary-dark">Vaccine Done List</h1>
                            <div class="card-content">
                                <table class="table is-full-width is-narrow is-striped">
                                    <p class="has-text-centered is-underlined"><strong>Vaccine Date:</strong> 04-10-2022</p>
                                    <thead>
                                        <th>Vaccine Name</th>
                                        <th>Remarks</th>
                                        <th>Given Time</th>     
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label>Anthrax</label></td>
                                            <td>With Extra</td>
                                            <td>04:20PM</td>  
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                          <i class="fa fa-edit">
                            </i> &nbsp; Vaccine Date & Note
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="Date">Date</label>
                                <input type="date" name="date" class="input is-success is-small" id="Date">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Note">Note</label>
                                <textarea name="note" class="textarea is-success is-small" id="Note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header has-background-success">
                        <div class="card-header-title">
                            <i class="fa fa-list"></i> &nbsp; Vaccines List
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
                                            <input type="checkbox" name="vaccines[]" value="{{$vaccine->vname}}">
                                        <label for="">{{$vaccine->vname}} - ({{$vaccine->vdays}}Days)</label>
                                        </td>
                                        <td>
                                            <label for="">{{$vaccine->vdose}}
                                            </label>
                                        </td>
                                        <td>
                                            <label for="">{{$vaccine->vrepeat}}</label>
                                        </td>
                                    </tr>
                                    @endforeach
                                
                            </tbody>
                        </table>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="button is-success is-small w-100">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
{{-- @section('scripts')
    <script type="text/javascript"> 
      $(document).ready(function(){  
	// code to get all records from table via select box
	$("#details").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = '$cows->id='+ id;    
		$.ajax({
			url: 'route('v')',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(create) {
			   if(cowData) {
					$("#heading").show();		  
					$("#no_records").hide();					
					$("#emp_name").text(employeeData.employee_name);
					$("#emp_age").text(employeeData.employee_age);
					$("#emp_salary").text(employeeData.employee_salary);
					$("#records").show();		 
				} else {
					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();
				}   	
			} 
		});
 	}) 
});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
    $('#card-1').hide();
           $('#details').change(function () {
             var id = $(this).val();
             $('#card-1').find('td').remove();
            //  $('vaccine-card').find('table').remove();
             $.ajax({
                url:'cow/'+id,
                type:'get',
                dataType:'json',
                success:function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len>0) {
                        for (var i = 0; i<len; i++) {
                             var id = response.data[i].id;
                             var dob = response.data[i].dob;
                             var age = response.data[i].age;
                             var gender = response.data[i].gender;
                             var type = response.data[i].type;
                             var td = "<td value='"+id+"'>"+dob+"</td>";
                            $('#card-1').show();

                             $("#card-1").append(td);
                        }
                    }
                }
             })
           });
        });
    </script>
@endsection --}}