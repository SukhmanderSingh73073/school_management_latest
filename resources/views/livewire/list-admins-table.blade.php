<div class="card">
    <div class="card-header">
        <h4 class="card-title mr-3 mt-1">Admins </h4>

        <form class="mr-3" action={{ route("admins.create") }}>
    <x-adminlte-button type="submit" label="Create New Admin"  theme="primary" icon="fas fa-key"  />
    <!-- <x-adminlte-button label="Bulk Upload" theme="primary" icon="fas fa-key"  /> -->
    </form>
    </div>
    <div class="card-body">
    

        <x-adminlte-datatable 
       
        id="school-list-table"
        :heads="['S/N', 'Name','Institution Name','Contact No' ,
         'address', 'EDIT' ,'VIEW','LOCK', 'Delete']" 
         class='text-capitalize' 
         bordered striped head-theme="dark"
          beautify>
          
            @foreach($admins as $admin)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $admin->name}}</td>
                <td style="text-transform: none">{{ $admin->school->name}}</td>
                <td>{{$admin->phone}}</td>
                <td>{{$admin->address}}</td>
                {{-- check file --}}
                {{-- {{/resources/views/pages/admin/index.blade.php}} --}}
                <td>
                  <button  class="btn btn-primary" onclick="actionHandle('/dashboard/admins/{{$admin->id}}/edit')"   >Edit</button>
                  
                </td>

                <td>
                <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/admins/{{$admin->id}}')" data-url="admins.edit" data-id="{{$admin->id}}"  >View</button>

                </td>


                <td>
                <button  class="btn btn-secondary" onclick="actionHandle('/dashboard/admins/{{$admin->id}}')" data-url="admins.edit" data-id="{{$admin->id}}"  >Lock</button>

                </td>


                {{-- <td>@livewire('dropdown-links', [
                    'links' => [
                    ['href' => route("admins.edit", $admin->id), 'text' => 'Edit profile', 'icon' => 'fas fa-cog'],
                    ['href' => route("admins.show", $admin->id), 'text' => 'View', 'icon' => 'fas fa-eye'],
                    ],
                    ],)
                </td> --}}
                <td>
                    @livewire('delete-modal', ['modal_id' => $admin->id ,"action" => route('admins.destroy', $admin->id), 'item_name' => $admin->name])
                </td>
            </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
 </div>
