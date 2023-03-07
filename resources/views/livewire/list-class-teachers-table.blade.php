<div class="card">

<div class='card-header row'>

<div class='col-6'>
        @livewire('school-set')
    </div>

    <div class='col-4'>
        <form action={{ route("classteachers.create") }}>
            <x-adminlte-button type="submit" label="Create New Class teacher" theme="primary"  />
        </form>
    </div>
   
</div>    <div class="card-body">
        <x-adminlte-datatable id="classteacher-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved', 'Delete']" class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($classteachers as $classteacher)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $classteacher->name}}</td>
                    <td style="text-transform: none">{{ $classteacher->email}}</td>
                    <td>{{$classteacher->gender}}</td>
                    <td>{{$classteacher->address}}</td>
                    <td>{{$classteacher->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/classteachers/{{$classteacher->id}}/edit')"   >Edit</button>
                 
                    </td>
                     <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/classteachers/{{$classteacher->id}}')" data-url="classteachers.edit" data-id="{{$classteacher->id}}"  >View</button>
                </td>
                <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/classteachers/{{$classteacher->id}}')" data-url="classteachers.edit" data-id="{{$classteacher->id}}"  >Lock</button>
                </td>
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $classteacher->id ,"action" => route('classteachers.destroy', $classteacher->id), 'item_name' => $classteacher->name])
                    </td>
                    
                    <td>
                        @livewire('delete-modal', ['modal_id' => $classteacher->id ,"action" => route('classteachers.destroy', $classteacher->id), 'item_name' => $classteacher->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
