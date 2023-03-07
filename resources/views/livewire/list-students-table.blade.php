<div class="card">
        <div class='card-header row'>

        <div class='col-6'>
                @livewire('school-set')
            </div>
            <div class='col-2'>
                <form action={{ route("students.create") }}>
                    <x-adminlte-button type="submit" label="Create New student" theme="primary"  />
                    <x-adminlte-input fgroup-class="col-md-0" type="hidden" name="type_data" value="1" />

                </form>
            </div>
            <div class='col-2'>
            
            <form action={{ route("students.create") }}>

                <button   id="bulkUpload_data" class="btn btn-primary">Bulk Upload Data</button>
                <x-adminlte-input type="hidden" fgroup-class="col-md-0" name="type_data" value="2" />
            </form>
            </div>
            <div class='col-2'>
            <form action={{ route("students.create") }}>
            
                <button   id="bulkUpload_data" class="btn btn-primary">Bulk Upload Images</button>
                <x-adminlte-input type="hidden" fgroup-class="col-md-0" name="type_data" value="3" />
            </form>
            </div>
           
    </div>
    <div class="card-body">

        <x-adminlte-datatable
         id="student-list-table-1" 
         
         :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved'
        , 'Delete']" class='text-capitalize'
         bordered striped head-theme="dark" beautify>
            @foreach($students as $student)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $student->name}}</td>
                <td style="text-transform: none">{{ $student->email}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->status}}</td>

                <td>
                    <button class="btn btn-primary" onclick="actionHandle('/dashboard/students/{{$student->id}}/edit')">Edit</button>
                </td>
                <td><button class="btn btn-secondary" onclick="actionHandle('/dashboard/students/{{$student->id}}')" data-url="students.edit" data-id="{{$student->id}}">View</button>
                </td>
                <td><button class="btn btn-secondary" onclick="actionHandle('/dashboard/students/{{$student->id}}')" data-url="students.edit" data-id="{{$student->id}}">Lock</button>
                </td>
                <td>
                    @livewire('withdraw-modal', ['modal_id' => $student->id ,"action" => route('students.withdraw', $student->id), 'item_name' => $student->name])
                </td>

                <td>
                    @livewire('delete-modal', ['modal_id' => $student->id ,"action" => route('students.destroy', $student->id), 'item_name' => $student->name])
                </td>
            </tr>
            @endforeach

           

        </x-adminlte-datatable>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" ></script>



<script>


</script>