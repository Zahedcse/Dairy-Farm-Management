<div>
    <div class="form-group mb-3">
        <label for="">Animal Name:</label>
        <select name="cow_id" class="form-select input is-success is-small" wire:model="selectedCow">
            <option>Select--One</option>
            @foreach ($data as $cow)
                <option value="{{$cow->id}}">
                    {{$cow->name}}
                </option> 
            @endforeach
        </select>
    </div>
    <div wire:loading wire:target="selectedCow" class="offset-5">
        <div class="spinner-border text-info" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    {{-- <p>{{$selectedCow}}</p> --}}
<div class="dropdown-divider"></div>
    @if (!is_null($cowData))
        <div class="card" id="card-1">
        <h1 class="is-size-3 has-text-centered p-2">Details of the cow</h1>
        <div class="card-content">
            <table wire:model="selected" class="table is-striped is-narrow">
                <thead>
                    <th>Date of Birth</th>
                    <th>Animal Age</th>
                    <th>Animal Gender</th>
                    <th>Animal Type</th>
                </thead>
                <tbody>
                    @foreach ($cowData as $cow)
                    <tr>
                        <td>{{$cow->dob}}</td>
                        <td>{{$cow->age}}</td>
                        <td>{{$cow->gender}}</td>
                        <td><label class="has-background-success-dark p-1 rounded text-white">{{$cow->type}}</label></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <!--Details of vaccine -->
</div>
