@extends('adminlte::page')

@section('title', __('Attendance'))


@section('content_header')

<h4>
    {{ __('Attendance') }}
</h4>

</dv>

@stop


@section('content')

<form action="{{route('view_check_student')}}" autocomplete="off" method="GET">


<div class='card-header row'>

<div class='col-3'>
            
            <x-adminlte-select name="school_id" onChange="this.form.submit()">
        @foreach ($all_data->schools as $school)
        <option value="{{ $school }}">{{ $school['name'] }} </option>
        @endforeach
    </x-adminlte-select>
    </div>
    
<div class='col-3'>
    <x-adminlte-select name="class_id" onChange="this.form.submit()">
        @foreach ($all_data->classes as $school)
        <option value="{{ $school }}">{{ $school['name'] }} </option>
        @endforeach
    </x-adminlte-select>
    </div>


        <div class='col-3'>
        <x-adminlte-input-date name="date_from" onChange="this.form.submit()" :config="['format' => 'YYYY/MM/DD']" placeholder="Date From"  autocomplete="off"/>

            </div>
            <div class='col-3'>
            <x-adminlte-input-date name="date_to" onChange="this.form.submit()" :config="['format' => 'YYYY/MM/DD']" placeholder="Date To"   autocomplete="off"/>

            </div>
    
            
            </div>
</form>
   


    @section('plugins.TempusDominusBs4', true)


<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive table-bordered table-sm">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Present</th>
                        <th>Absent</th>
                        <th>Apply Leave</th>
                        <th>Half Day Leave</th>


                    </tr>
                </thead>

                <tbody>

                
                @csrf
                            @foreach ($all_data->iems_data as $user)


                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->p }}</td>
                                    <td>{{ $user->a }}</td>
                                    <td>{{ $user->al }}</td>
                                    <td>{{ $user->hdl }}</td>
                                    

                                    
                                </tr>
                            @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("profile-image-input").addEventListener("change", function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                var profilePicture = document.getElementById("profile-picture");
                profilePicture.src = e.target.result;
                }
                reader.readAsDataURL(file);
            });
        });
      
function changeHandler(e) {
   
    
     //$class_data['iems_data']
    // $class_data['iems_data'] = $class_data[0]['studentRecords'] ;
}

</script>