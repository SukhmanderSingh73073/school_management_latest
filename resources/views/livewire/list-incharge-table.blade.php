<div class="card">

<div class='card-header row'>

<div class='col-6'>
        @livewire('school-set')
    </div>

    <div class='col-4'>
        <form action={{ route("incharges.create") }}>
            <x-adminlte-button type="submit" label="Create New office Incharge" theme="primary"  />
        </form>
    </div>
   
</div>

  
    <div class="card-body">
        <x-adminlte-datatable id="incharge-list-table" 
        :heads="['S/N', 'Name','email','gender' 
        , 'address','Status', 'Edit','View','Lock','Approved', 'Delete']"
         class='text-capitalize' bordered striped head-theme="dark" beautify >
            @foreach($incharges as $incharge)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $incharge->name}}</td>
                    <td style="text-transform: none">{{ $incharge->email}}</td>
                    <td>{{$incharge->gender}}</td>
                    <td>{{$incharge->address}}</td>
                    <td>{{$incharge->status}}</td>
                    
                    <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/incharges/{{$incharge->id}}/edit')"   >Edit</button>
                 
                    </td>
                     <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/incharges/{{$incharge->id}}')" data-url="incharges.edit" data-id="{{$incharge->id}}"  >View</button>
                </td>
                <td><button  class="btn btn-secondary" onclick="actionHandle('/dashboard/incharges/{{$incharge->id}}')" data-url="incharges.edit" data-id="{{$incharge->id}}"  >Lock</button>
                </td>
                <td>
                        @livewire('withdraw-modal', ['modal_id' => $incharge->id ,"action" => route('incharges.destroy', $incharge->id), 'item_name' => $incharge->name])
                    </td>
                    
                    <td>
                        @livewire('delete-modal', ['modal_id' => $incharge->id ,"action" => route('incharges.destroy', $incharge->id), 'item_name' => $incharge->name])
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>
