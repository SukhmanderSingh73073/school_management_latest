<div class="card">
   
<div class='card-header row'>

<div class='col-6'>
        @livewire('school-set')
    </div>

    <div class='col-2'>
        <form action={{ route("teachers.create") }}>
            <x-adminlte-button type="submit" label="Create New Teachers" theme="primary"  />
        </form>
    </div>
   
</div>
    <div class="card-body">
        <x-adminlte-datatable id="teacher-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved', 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $teacher->name}}</td>
                    <td style="text-transform: none">{{ $teacher->email}}</td>
                    <td>{{$teacher->gender}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/teachers/{{$teacher->id}}/edit')"   >Edit</button>
                 
                    </td>
                     <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/teachers/{{$teacher->id}}')" data-url="teachers.edit" data-id="{{$teacher->id}}"  >View</button>
                </td>
                <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/teachers/{{$teacher->id}}')" data-url="teachers.edit" data-id="{{$teacher->id}}"  >Lock</button>
                </td>
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $teacher->id ,"action" => route('teachers.destroy', $teacher->id), 'item_name' => $teacher->name])
                    </td>
                    
                    <td>
                        @livewire('delete-modal', ['modal_id' => $teacher->id ,"action" => route('teachers.destroy', $teacher->id), 'item_name' => $teacher->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
